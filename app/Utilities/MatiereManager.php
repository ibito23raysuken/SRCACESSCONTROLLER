<?php
namespace App\Utilities;

use App\Models\Matiere;
use App\Http\Requests\MatiereRequest;


class MatiereManager{
    public function build(Matiere $matiere,MatiereRequest $request){
        $matiere->cours_id=$request->input('cours_id');
        $matiere->parcours_id=$request->input('parcours_id');
        $matiere->jour=$request->input('jour');
        $matiere->heure_debut=$request->input('heure_debut');
        $matiere->heure_fin=$request->input('heure_fin');
        $matiere->enseignant_id=$request->input('enseignant');
        $matiere->anneedetude=$request->input('anneedetude');
        $matiere->save();
    }
}
?>
