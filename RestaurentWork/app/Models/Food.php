<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable=[
      'name',
      'description',
      'price',
      'discount',
      'image',
      'category_id',

    ];

    protected $table= 'foods';
}
