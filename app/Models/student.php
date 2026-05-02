<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //
    protected $fillable = [
        "user_id",
        "last_name",
        "phone_numbe",
       
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function payment(){
        return $this->hasMany(Payment::class);
    }

    
}

