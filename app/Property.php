<?php

namespace App;

use Carbon\Carbon;
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
    public function setImageAttribute($image){
        if(! empty($image)){
            $name = Carbon::now()->second.$image->getClientOriginalName();
            $this->attributes['image'] = $name;
            \Storage::disk('local')->put($name, \File::get($image));
        }
    }
}
