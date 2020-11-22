<?php
# @Date:   2020-11-22T13:42:06+00:00
# @Last modified time: 2020-11-22T13:47:26+00:00




namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;


public function books()
{
  return $this->hasMany('App\Models\Book');
}

}
