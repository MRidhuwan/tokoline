<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //

    //panggil field table category databases
    protected $fillable =
    [
        'products_id',
        'users_id'
    ];
    protected $hidden = [];

    //buat relasi field table database
    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'products_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
