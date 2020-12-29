<?php
# @Date:   2020-12-20T16:17:53+00:00
# @Last modified time: 2020-12-20T16:37:00+00:00




namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public function book()
    {
      return $this->belongsTo('App\Models\Book');
    }
    public function user()
    {
      return $this->belongsTo('App\Models\User');
    }
}
