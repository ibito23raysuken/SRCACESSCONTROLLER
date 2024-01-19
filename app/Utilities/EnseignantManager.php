<?php
namespace App\Utilities;

use App\Models\Enseignant;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\EnseignantRequest;

class EnseignantManager{
    public function build(Enseignant $enseignant,EnseignantRequest $request){
        $enseignant->nom=$request->input('nom');
        $enseignant->prenom=$request->input('prenom');
        $enseignant->sexe=$request->input('sexe');
        if ($request->filled('password')) {
            $enseignant->password = Hash::make($request->input('password'));
        }
        $enseignant->save();
    }
}
?>
