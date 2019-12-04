<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'title', 'description', 'url', 'image'
    ];

    public function profileImage() {
        $imagePath = ($this->image) ? $this->image : "profile/N46kGmptM02es6Q1m0aWi8eBETB8X5XuNxxlnH2M.png";
        return "/storage/". $imagePath;
    }

    public function followers() {
        return $this->belongsToMany('App\User');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
