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
    'published_at',
    'user_id'  //temp
  ];

  // reutrn published_at as Carbon
  protected $dates = ['published_at'];

  //scopes
  public function scopePublished($query) {
    $query->where('published_at', '<=', Carbon::now());
  }

  public function scopeUnpublished($query) {
    $query->where('published_at', '>', Carbon::now());
  }
  //endsopes

  public function setPublishedAtAttribute($date) {
    $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
  }

  public function getTagListAttribute() {
    return $this->tags()->lists('id')->toArray();
  }

  public function user() {
    return $this->belongsTo('App\User');
  }

  public function tags() {
    return $this->belongsToMany('App\Tag')->withTimestamps();
  }
}
