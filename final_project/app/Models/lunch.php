<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lunch extends Model
{
  use HasFactory;
  protected $table = 'create_food_table';
  protected $fillable = ['name','employee_id','menu'];


}
