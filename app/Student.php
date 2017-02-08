<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['dni','lastName','firstName','birthday','sex','college_id'];

    public function College(){
        return $this->belongsTo(College::class);
    }
}
