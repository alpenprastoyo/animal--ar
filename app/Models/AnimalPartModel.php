<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalPartModel extends Model
{
    protected $table = 'animal_part';
    
    protected $fillable = [
        'id_animal',
        'name',
        'description',
        'image'
    ];

    public $timestamps = true;

    use HasFactory;
}
