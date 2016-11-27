<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use \app\Comments;
use Carbon\Carbon;
class User extends Authenticatable
{
    use Notifiable;

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name', 'email','password','type','state','image'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'password', 'remember_token',
    ];
    public function setImageAttribute($image){
        if($this->password != null){
            if(! empty($image)){
                $name = Carbon::now()->second.$image->getClientOriginalName();
                $this->attributes['image'] = $name;
                \Storage::disk('local')->put($name, \File::get($image));
            }
        }
        $this->attributes['image'] = $image;

    }
}
