<?php

use App\Events\newMessage;
use App\Events\testMessage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\topicController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\groupcontroller;
use App\Http\Controllers\customerController;
use App\Http\Controllers\MessageController;
use App\Models\topic;
use App\Models\customer;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

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
Route::get('', [CustomAuthController::class, 'home']);
Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('postlogin', [CustomAuthController::class, 'login'])->name('postlogin');
Route::get('signup', [CustomAuthController::class, 'signup'])->name('register-user');
Route::post('postsignup', [CustomAuthController::class, 'signupsave'])->name('postsignup');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::resource('groups', customerController::class);
Route::get('delete/{user}', function(customer $user){
            $user->delete();
            Session::flush();
            return redirect('');
});
Route::get('/mess',function(){
        event(new testMessage());

        return null;
});

Route::post('messages/{customer}/{topic}',function(customer $customer, topic $topic, Request $request){
    $mess=$request->input('subject');
   Message::create(['message'=> $mess,
                     'customer_id'=> $customer->id,
                     'topic_id' => $topic->id]);
                    
                    return redirect()->route('groups.show',$topic->id);
});
Route::resource('topics', topicController::class);
/*
Route::get('/', function () {
    return view('welcome');
});
*/
