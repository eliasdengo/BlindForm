<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\topic;
use Illuminate\Http\Request;

class groupcontroller extends Controller
{
     public function group(){
        
        return view('group',[
            'topics' => topic::all()
        ]);
        
    }

    function newUser(topic $place){
     
        $custum = new customer();
        $rand = rand(0,1000);
        $custum->name= 'user '.$rand;
        session(['user'=> $custum->name,
                 'groupName'=> $place->topic]);
        $custum->topic_id = $place->id;
        $custum->save();
        $online = $place->customers;
        
        return view('groupWild',[
            'groupName' => session('groupName'),
            'user'=>session('user'),
            'online'=>count($online)
        ]);
        
    }
     
}
