<?php
# @Date:   2020-11-16T11:49:40+00:00
# @Last modified time: 2020-12-20T16:35:17+00:00




namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public function publisher()
    {
      return $this->belongsTo('App\Models\Publisher');
    }

    public function reviews()
    {
      return $this->hasMany('App\Models\Review');
    }

}
