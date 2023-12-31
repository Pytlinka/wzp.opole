<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = [

        'title',
        'author',
        'image',
        'status',


    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
