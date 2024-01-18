<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
    protected $fillable = [
        'etudiant_id',
        'parcoure_id',
        'matiere_id',
        'jour',
    ];
    use HasFactory;
}
