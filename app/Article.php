<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  // only these can be 'mass-asigned'
  protected $fillable = [
    'title',
    'body',
    'published_at'
  ];

  // reutrn published_at as Carbon
  protected $dates = ['published_at'];

  public function scopePublished($query) {
    $query->where('published_at', '<=', Carbon::now());
  }

  public function scopeUnpublished($query) {
    $query->where('published_at', '>', Carbon::now());
  }


  public function setPublishedAtAttribute($date) {
    $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
  }
}
