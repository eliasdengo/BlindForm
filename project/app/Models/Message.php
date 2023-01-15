<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\customer;
use App\Models\topic;

class Message extends Model
{
    use HasFactory;
    protected $fillable=[
        'message','customer_id','topic_id'
    ];
    public function topic(){
        return $this->belongsTo(topic::class);
    }
    public function customer(){
        return $this->belongsTo(customer::class);
    }
}
