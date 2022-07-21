<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Auths extends Model
{
    use Notifiable;
    protected $table = 'authtable';
    protected $fillable=[

         'name', 'email', 'passward',

    ]; 
}
