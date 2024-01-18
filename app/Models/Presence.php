<?php

namespace App\Models;

use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Presence extends Model
{
    protected $fillable = [
        'etudiant_id',
        'parcoure_id',
        'matiere_id',
        'jour',
    ];
    use HasFactory;
    public function matiere() {
        return $this->belongsTo(Matiere::class);
    }
    public function etudiant() {
        return $this->belongsTo(Etudiant::class);
    }

}
