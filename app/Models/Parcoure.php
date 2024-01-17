<?php

namespace App\Models;

use App\Models\Matiere;
use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Parcoure extends Model
{
    protected $fillable = [
        'nomparcoure',
    ];
    use HasFactory;
    public function etudiants() {
        return $this->hasMany(Etudiant::class);
    }
    public function matiere() {
        return $this->hasMany(Matiere::class, 'parcours_id');
    }
}
