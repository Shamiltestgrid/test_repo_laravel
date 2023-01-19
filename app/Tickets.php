<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    //
    protected $fillable = ['email','text'];
    protected $table = 'tickets';
}
