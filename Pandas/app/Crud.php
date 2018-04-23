<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $fillable = ['FirstName','LastName','Email','CardNumber','Mobile','Password'];
}
