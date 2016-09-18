<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name','slug','price','newPrice','qty','intro','image','keywords','description','cate_id'];
}
