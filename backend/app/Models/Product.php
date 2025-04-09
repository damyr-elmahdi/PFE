<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prix',
        'description',
        'image',
        'categorie',
        'stock'
    ];

    
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }

  
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}