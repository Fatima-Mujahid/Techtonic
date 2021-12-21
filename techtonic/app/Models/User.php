<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primaryKey = 'email';
    protected $keyType = 'string';

    public function address()
    {
        return $this->hasOne(Address::class, 'address_id');
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class, 'customer_email');
    }

}