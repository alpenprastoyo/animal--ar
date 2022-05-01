<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalModel extends Model
{
    protected $table = 'animal';
    
    protected $fillable = [
        'name',
        'folder',
        'description',
        'animation',
        'setting_scale',
        'setting_position',
        'image',
        'scan'
    ];

    public $timestamps = true;


    use HasFactory;
}
