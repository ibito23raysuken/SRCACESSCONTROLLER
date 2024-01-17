<?php

namespace App\Models;

use App\Models\Matiere;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cours extends Model
{
    protected $fillable = [
        'nomcour',
    ];
    use HasFactory;
    public function matiere() {
        return $this->hasMany(Matiere::class);
    }
}
