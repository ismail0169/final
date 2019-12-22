<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class flightstat extends Model
{
    //
     public $timestamps=false;
      protected $fillable = ['email','flightnumber','Ticketnumber'];
}
