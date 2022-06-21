<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    use HasFactory;

    protected $fillable = [
        'apiId',
        'name',
        'url',
        'type', 
        'language',
        'status', 
        'runtime', 
        'weight', 
        'premiered',
        'ended',
        'officialSite',
        'averageRate',
        'summary',
        'img',
    ];
    
}
