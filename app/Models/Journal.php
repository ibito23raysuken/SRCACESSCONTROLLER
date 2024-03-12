<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    protected $fillable = [
        'etudiant_id',
        'parcoure_id',
        'ref_lecteur',
        'heure',
        'jour',
    ];

    use HasFactory;

    public function etudiant() {
        return $this->belongsTo(Etudiant::class);
    }
}
