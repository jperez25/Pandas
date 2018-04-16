<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends  Authenticatable
{
    protected $fillable = ['name', 'email', 'password', 'phoneNumber', 'level', 'cardNumber'];

    const ADMIN_TYPE = '2';
    const DEFAULT_TYPE = '1';
    
    public function isAdmin()    {        
        return $this->level === self::ADMIN_TYPE;    
    }
        
}
