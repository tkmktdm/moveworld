<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $guarded=array('id');
    public static $rules=array(
        'person_id'=>'required',
        'name'=>'required',
        'message'=>'required',
    );

    public function getData()
    {
        return $this->id . ': ' . $this->title;
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function users(){
        return $this->hasMany('App\User','name');
    }
    //
}
