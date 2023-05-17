<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable=['p_title','c_email'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'p_title', 'p_title');
    }
}
