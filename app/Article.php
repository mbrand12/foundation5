<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  // only these can be 'mass-asigned'
  protected $fillable = [
    'title',
    'body',
    'published_at'
  ];
}
