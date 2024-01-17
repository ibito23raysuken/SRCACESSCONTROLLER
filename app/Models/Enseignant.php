<?php

namespace App\Models;

use App\Models\Matiere;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Enseignant extends Model
{
    protected $fillable = [
        'nom',
        'prenom',
    ];
    use HasFactory;
    public function matiere() {
        return $this->hasMany(Matiere::class);
    }
}
