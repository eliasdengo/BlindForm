<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    protected $fillable=[
        'topic_id','name'
    ];

    
    public function message(){
       return $this->hasMany(message::class);
    }
    public function topic(){
        return $this->belongsTo(topic::class);
    }
}
