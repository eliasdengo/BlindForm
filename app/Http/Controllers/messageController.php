<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\message;
use App\Models\topic;
use Illuminate\Http\Request;

class messageController extends Controller
{
    public function send(Request $request){
        message::create([
            'message'=> $request['subject'],
            'customer_id'=>$request['user'],
            'topic_id'=>$request['topic']
        ]);
        // return redirect()->route('groupWild',$topic->id);
        return['succsus'=>true];
    }

}
