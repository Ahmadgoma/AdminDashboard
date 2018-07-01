<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // assign table name to model
    protected $table = 'categories';

    // fields of category table
    protected $fillable =['name' , 'image'];

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
