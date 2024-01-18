<?php

namespace App\Models;

use App\Models\Cours;
use App\Models\Parcoure;
use App\Models\Enseignant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Matiere extends Model
{
    protected $fillable = [
        'cours_id',
        'parcours_id',
        'jour',
        'heure_debut',
        'heure_fin',
        'enseignant_id',
        'anneedetude'
    ];
    use HasFactory;
    public function enseignant() {
        return $this->belongsTo(Enseignant::class);
    }
    public function cours() {
        return $this->belongsTo(Cours::class);
    }
    public function parcours() {
        return $this->belongsTo(Parcoure::class);
    }
}
