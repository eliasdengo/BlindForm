<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class topic extends Model
{
    use HasFactory;
    protected $fillable = [
        'topic', 'detail'
    ];
    public function customers(){
        return $this->hasMany(customer::class);
    }
    public function messages(){
        return $this->hasMany((message::class));
    }
}
