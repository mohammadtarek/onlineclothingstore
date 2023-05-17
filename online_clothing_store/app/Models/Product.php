<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // protected $primaryKey = 'p_title';
    use HasFactory;
    protected $fillable=['p_title','p_desc','p_price','p_size','p_quantity','user_solid','p_photo','p_color'];

    public function carts()
    {
        return $this->hasMany(Cart::class, 'p_title', 'p_title');
    }
}
