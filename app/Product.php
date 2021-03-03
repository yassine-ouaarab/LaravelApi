<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{

    use SoftDeletes;
    protected $fillable = ['name','color','price'];
    protected $hidden = ['created_at','update_at'];
}
