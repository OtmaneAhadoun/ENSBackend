<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;
    protected $table = 'cours';

    protected $fillable = [
        'idModule', 'idProfesseur', 'idFiliere', 'idJour', 'Heure_debut', 'Heure_fin', 'semestre',
    ];
}
