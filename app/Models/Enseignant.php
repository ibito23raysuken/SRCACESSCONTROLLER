<?php

namespace App\Models;

use App\Models\Matiere;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Enseignant extends Authenticatable
{
    use HasApiTokens;

    protected $fillable = [
        'nom',
        'prenom',
        'password'
    ];
    use HasFactory;
    public function matiere() {
        return $this->hasMany(Matiere::class);
    }
}
