<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use SoftDeletes;
    //panggil field table category databases
    protected $fillable =
    [
        'name',
        'slug',
        'users_id',
        'categories_id',
        'price',
        'description'

    ];
    protected $hidden = [];

    //buat relasi field table database
    public function Galleries()
    {
        return $this->hasMany(ProductGallery::class, 'products_id', 'id');
    }

    public function User()
    {
        return $this->hasOne(User::class, 'id', 'users_id');
    }

    public function Category()
    {
        return $this->belongsTo(Category::class, 'categories_id', 'id');
    }
}
