<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title','genre','release_year','rating','comment','watched_at','category_id','poster'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
