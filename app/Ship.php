<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ship extends Model
{
    protected $table = 'ships';
    protected $fillable = ['price_ship','order_id'];
}
