<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    use HasFactory;
    protected $fillable=[
        'message','customer_id','topic_id'
    ];
    public function customer(){
        return $this->belongsTo(customer::class);
    }
    public function topic(){
        return $this->belongsTo(topic::class);
    }
}
