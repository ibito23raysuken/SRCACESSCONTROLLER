<?php
namespace App\Utilities;

use App\Models\Enseignant;
use App\Http\Requests\EnseignantRequest;

class EnseignantManager{
    public function build(Enseignant $enseignant,EnseignantRequest $request){

        $enseignant->nom=$request->input('nom');
        $enseignant->prenom=$request->input('prenom');
        $enseignant->sexe=$request->input('sexe');
        $enseignant->save();
    }
}
?>
