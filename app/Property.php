<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;
class Property extends Model
{
    //
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    protected $fillable = [
        'name', 'description','image','state', 'price', 'location'
    ];
}
