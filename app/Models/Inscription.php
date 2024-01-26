<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;
    protected $table="inscription";
    protected $fillable = [
        'nom', 'prenom', 'code_massar', 'cin', 'dateNaissance',
        'university', 'diplome', 'noteGeneral', 'status', 'idFiliere'
    ];
}
