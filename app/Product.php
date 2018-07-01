<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //fields of products table .
    protected $fillable = ['name' , 'image' , 'category_id' , 'price'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
