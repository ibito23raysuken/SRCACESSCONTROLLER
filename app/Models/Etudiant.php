<?php

namespace App\Models;

use App\Models\Parcoure;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Etudiant extends Model
{
    protected $fillable = [
        'nom',
        'prenom',
        'sexe',
        'ref_qrcode',
        'ref_rfid',
        'imagepath',
        'datedenaissance',
        'lieudenaissance',
        'Anneedetude',
        'parcoure_id'
    ];
    use HasFactory;
    public function parcoure() {
        return $this->belongsTo(Parcoure::class);
    }
}
