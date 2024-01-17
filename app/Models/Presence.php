<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
    protected $fillable = [
        'nom_etudiant',
        'ref_etudiant',
        'ref_qrcode',
    ];
    use HasFactory;
}
