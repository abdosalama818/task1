<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commnet extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','updated_at'];

        //comment belong to one post
        public function post(){
            return $this->belongsTo(Post::class);

        }

        //comment belongs to one user

        public function user(){
            return $this->belongsTo(User::class);

        }
}
