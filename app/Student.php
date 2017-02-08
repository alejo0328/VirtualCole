<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['lastName,firstName','birthday','sex'];

    public function College(){
        return $this->belongsTo(College::class);
    }
}
