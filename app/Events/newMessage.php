<?php

namespace App\Events;

use App\Models\customer;
use App\Models\message;
use App\Models\topic;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class newMessage implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
  
    Public $message;
    public $topic;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(message $message, topic $topic)
    {
        $this->message=$message;
        $this->topic=$topic;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('public.newMessage'.$this->topic->id);
    }
    public function broadcastAs(){
        return 'newMessage';
    }
    public function broadcastWith(){
        return [
            'message'=>$this->message->message,
            'userId'=>$this->message->customer_id
        ];
    }
}
