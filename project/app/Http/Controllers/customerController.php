<?php

namespace App\Http\Controllers;
use App\Models\topic;
use App\Models\Message;
use App\Models\customer;

use App\Events\newMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        // event(new newMessage);
         return view('group',[
            'topics' => topic::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {      
        $groupName = topic::where('id',$id)->first();
        $message = Message::where('topic_id',$id)->get();
        $online = $groupName->customers;
        $rand = rand(0,1000);  
           if(!Session::has('user_id')){  
              $custum = customer::create(['name'=>"user ".$rand,
                          'topic_id'=>$id]);
                Session::put(['user'=> $custum,
                 'user_id'=>$custum->id,
                 'groupName'=>$groupName]);
            return view('groupWild',[
            'groupName' => session('groupName'),
            'custom'=>session('user'),
            'online'=>count($online),
            'messages'=>$message
        ]);
           
           }else{  
            return view('groupWild',[
            'groupName' => session('groupName'),
            'custom'=>session('user'),
            'online'=>count($online),
            'messages'=>$message
        ]);
        
    }}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\customer $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(customer $group)
    {
        $group->delete();
        redirect()->route('groups.index');
    
    }
}
