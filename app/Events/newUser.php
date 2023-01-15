<?php

namespace App\Events;

use App\Models\customer;
use App\Models\topic;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class newUser implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $customer;
    public $topic;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(customer $customer,topic $topic)
    {
        $this->topic= $topic;
        $this->customer=$customer;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new channel('public.customer'. $this->topic->id);
    }
    public function broadcastAs(){
        return 'newUser';
    }
    public function broadcastWith(){
        return [
            'topic_id'=>$this->topic->id
        ];

    }
}
