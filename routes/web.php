<?php

use App\Events\ChatEvent;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\topicController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\HomeController;
use App\Events\newUser;
use App\Events\newMessage;
use App\Events\logedOut;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\messageController;
use App\Models\customer;
use App\Models\topic;
use App\Models\message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Exists;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::post('send', function(Request $request){
    $request->validate([
        'name'=>'required',
        'message'=>'required'
    ]);
    $message=[
        'name'=>$request->name,
        'message'=>$request->message,
    ];
    ChatEvent::dispatch($message);
});

Route::get('', [App\Http\Controllers\privateController::class, 'index']);
Auth::routes();

//Route::get('', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::resource('/topics', topicController::class);

Route::get('', [adminController::class, 'home']);
Route::get('dashboard', [adminController::class, 'dashboard']);
Route::get('login', [adminController::class, 'index'])->name('login');
Route::post('postlogin', [adminController::class, 'login'])->name('postlogin');
Route::get('signup', [adminController::class, 'signup'])->name('register-user');
Route::post('postsignup', [adminController::class, 'signupsave'])->name('postsignup');
Route::get('signout', [adminController::class, 'signOut'])->name('signout');
Route::get('profile', [adminController::class, 'profile'])->name('profile');
Route::get('groupchat',function(){
return view('group',[
    'topics' => topic::all()
]);
})->name('groupchat');
Route::get('groupWild/{topic}',function(topic $topic , message $message){
$rand = rand(0,1000);
if(!Session::has(['name'])){
    $user = customer::create([
        'name' => 'user '.$rand,
        'topic_id'=> $topic->id
    ]);
    Session::put('name', $user);
    broadcast(new newUser($user,$topic))->toOthers();

  $online= count($topic->customers);
    return view('groupWild',[
        'online'=> $online,
        'topic' => $topic,
        'user' => Session::get('name'),
        'messages'=>$topic->messages
    ]);
}
else{
   $online= count($topic->customers);
    return view('groupWild',[
        'online'=> $online,
        'topic' => $topic,
        'user' => Session::get('name'),
        'messages'=>$topic->messages
    ]);
}

})->name('groupWild');
Route::get('endMessage/{topic}/{user}',function( topic $topic,customer $user){

Session::flush();
$messages= $user->message;
foreach($messages as $message ){
$message->delete();
};
broadcast(new logedOut($topic,$user))->toOthers();
$user->delete();
return redirect()->route('home');
})->name('endMessage');
Route::post('/sendMessage', function (Request $request){
$mess = message::create([
    'message'=> $request->message,
    'customer_id'=>$request->user,
    'topic_id'=>$request->topic
]);
//return redirect()->route('groupWild',$request->topic->id);
 // $table = DB::table('topics')->where('id',$request->topic)->first();
//   $object = json_decode(json_encode($table));
  $me=$mess->topic;

  broadcast(new newMessage($mess,$me))->toOthers();
//  return null;
});
Route::resource('topics', topicController::class);
Route::get('newuser',function(){
// event(new newUser);
return view('welcome');
});
