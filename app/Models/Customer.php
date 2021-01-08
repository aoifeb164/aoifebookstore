<?php
# @Date:   2021-01-08T18:25:58+00:00
# @Last modified time: 2021-01-08T18:26:52+00:00




namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

public function user()
{
  return $this->belongsTo('App\Models\User');
}

}
