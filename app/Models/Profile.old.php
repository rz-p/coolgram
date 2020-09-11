<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'svg/240_F_64678017_zUpiZFjj04cnLri7oADnyMH0XBYyQghG.jpg';
        return '/public/storage/'. $imagePath;
    }

    public function followers()
    {
       return $this->belongsToMany(User::class);
    }

}
