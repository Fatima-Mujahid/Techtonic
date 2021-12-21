<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    public $timestamps = false;

    // protected $with = ['color', 'specs', 'images'];

    public function color()
    {
        return $this->belongsTo(ProductColor::class, 'color_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function specs()
    {
        return $this->hasMany(ProductSpec::class, 'product_id');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, "order_has_products", "product_id", "order_id")->withPivot('quantity','product_total');
    }

    public function carts()
    {
        return $this->belongsToMany(Cart::class, "cart_has_products", "product_id", "cart_id")->withPivot('quantity');;
    }
}