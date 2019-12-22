<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class flight extends Model
{
    //
    public $timestamps=false;
      protected $fillable = ['fromcity', 'tocity','email'];
}
