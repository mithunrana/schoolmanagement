<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\semesterlist;
class students extends Model
{
    protected $guarded=[];
    
    public function classname(){
        return $this->belongsTo(semesterlist::class,'semester');
    }
}
