<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $fillable=[
        "amount",
        "student_id",
        "sinf_id",
    ];

    public function student(){
        return $this->belongsTo(student::class);
    }
    public function sinf(){
        return $this->belongsTo(Sinf::class);
    }
}
