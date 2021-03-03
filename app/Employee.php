<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //protected $table = "employees";
    protected $fillable = ['name','email','salary'];
    protected $hidden = ['created_at','update_at'];
}
