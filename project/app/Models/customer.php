<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    protected $fillable=[
        'name','topic_id'
    ];
    public function topic(){
        return $this->belongsTo(topic::class);
    }
    public function message(){
        return $this->hasMany(Message::class);
    }
}
