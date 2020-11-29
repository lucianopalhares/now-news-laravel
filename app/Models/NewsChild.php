<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsChild extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function news(){
        return $this->belongsTo('App/Model/News','news_id');
    }
}
