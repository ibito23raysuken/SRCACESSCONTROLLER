<?php
namespace App\Utilities;

use App\Models\Etudiant;
use App\Http\Requests\EtudiantRequest;


class EtudiantManager{
    public function build(Etudiant $etudiant,EtudiantRequest $request){
        if (count($request->files)) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $etudiant->imagepath=$imageName;
        } else {
            $etudiant->imagepath=$request->input('image');
        }

        $textpourqrcode=$request->nom.$request->parcoure;

        $etudiant->nom=$request->input('nom');
        $etudiant->prenom=$request->input('prenom');
        $etudiant->sexe=$request->input('sexe');
        $etudiant->datedenaissance=$request->input('birth_day');
        $etudiant->lieudenaissance=$request->input('lieudenaissance');
        $etudiant->ref_rfid=$request->input('ref_rfid');
        $etudiant->ref_qrcode=$textpourqrcode;

        $etudiant->parcoure_id=$request->input('parcoure');
        $etudiant->Anneedetude=$request->input('Annedetude');
        $etudiant->save();
    }
}
?>
