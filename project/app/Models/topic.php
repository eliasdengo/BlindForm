<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Message;
use App\Models\customer;
class topic extends Model
{
    use HasFactory;
    protected $fillable = [
        'topic', 'detail'
    ];
    public function customers(){
        return $this->hasMany(customer::class);
    }
    public function message(){
        return $this->hasMany(Message::class);
    }
}
