<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Comment extends Model
{
    protected $fillable = [
        'content', 'user_id','property_id','date'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function property()
    {
        return $this->belongsTo('App\Property');
    }

}
