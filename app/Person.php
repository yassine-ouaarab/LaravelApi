<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use SoftDeletes;
    protected $fillable = ['firstName','lastName','email','phone'];
    protected $hidden = ['created_at','update_at'];
}
