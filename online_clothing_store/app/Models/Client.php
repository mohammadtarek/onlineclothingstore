<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class Client extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;

    use HasFactory;
   protected $fillable=['c_email','c_firstname','c_lasttname','c_address'
,'c_phone','c_gender','c_dob','c_password'];
}
