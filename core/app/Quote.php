<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = ['id', 'name', 'email', 'fields', 'status', 'created_at', 'updated_at'];
}
