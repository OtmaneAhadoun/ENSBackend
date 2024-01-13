<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professeur extends Model
{
    use HasFactory;
    protected $table = 'professeur';
    protected $fillable = [
        'id',
        'nom',
        'prenom',
        'num_telephone',
        'adresse',
        'email',
        'image'
    ];
}
