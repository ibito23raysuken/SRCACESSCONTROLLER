<?php

namespace App\Observers;

use App\Models\Etudiant;
use Illuminate\Support\Str;

class EtudiantObserver
{
    /**
     * Handle the Etudiant "created" event.
     */
    public function created(Etudiant $etudiant): void
    {

        $etudiant->slug=Str::slug($etudiant->nom,"-");
        $etudiant->save();
    }

    /**
     * Handle the Etudiant "updated" event.
     */
    public function updated(Etudiant $etudiant): void
    {
        //
    }

    /**
     * Handle the Etudiant "deleted" event.
     */
    public function deleted(Etudiant $etudiant): void
    {
        //
    }

    /**
     * Handle the Etudiant "restored" event.
     */
    public function restored(Etudiant $etudiant): void
    {
        //
    }

    /**
     * Handle the Etudiant "force deleted" event.
     */
    public function forceDeleted(Etudiant $etudiant): void
    {
        //
    }
}
