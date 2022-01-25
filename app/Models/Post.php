<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','updated_at'];
    //poat belongs to one category

    public function cat(){
        return $this->belongsTo(Cat::class);
    }

    // post has meny comments

    public function comments(){
        return $this->hasMany(Commnet::class);

    }
}
