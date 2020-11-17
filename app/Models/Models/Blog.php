<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

  protected $table = 'blogs';

  protected $fillable = 
  [
    'title',
    'content'
  ];
}
