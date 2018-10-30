<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    //
    protected $fillable = [
        'url', 'title', 'keywords', 'description', 'alexa', 'icp', 'rank'
    ];

    protected $casts = [
        'icp' => 'json',
        'rank' => 'json',
    ];
}
