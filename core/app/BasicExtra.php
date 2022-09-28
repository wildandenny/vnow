<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BasicExtra extends Model
{
  protected $table = 'basic_settings_extra';

  public $timestamps = false;

  public function language()
  {
    return $this->belongsTo('App\Language');
  }

  protected $fillable = [
    'faq_category_status',
    'gallery_category_status',
    'package_category_status'
  ];
}
