<?php
# @Date:   2020-11-16T11:49:40+00:00
# @Last modified time: 2020-11-22T13:49:30+00:00




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


}
