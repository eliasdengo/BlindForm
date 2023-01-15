<?php

namespace App\Events;

use App\Models\customer;
use App\Models\topic;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class logedOut implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $topic;
    public $customer;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(topic $topic, customer $customer)
    {
        $this->topic=$topic;
        $this->customer=$customer;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('public.customerOut'.$this->topic->id);
    }
    public function broadcastAs(){
        return 'logedout'; 
    }
}
