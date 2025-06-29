<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class OmniUser extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $table = 'omni_user';
    protected $primaryKey = 'userid';
    public $timestamps = false;    

    protected $fillable = [
        'username', 'password', 'usercode', 'user_type', 'user_email', 'status'
    ];

    protected $hidden = ['password'];
}
