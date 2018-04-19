<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=[
      'title',
      'image',
        'parent_id',

    ];

    protected $table= 'categories';
}
