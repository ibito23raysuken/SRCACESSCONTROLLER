<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Matiere;
use App\Models\Parcoure;
use App\Models\Presence;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function home() {
        return view('welcome');
    }
    function schedule(Request $request, $mention, $annee) {

        $allanneetude = ["1 ere Annee","2 eme Annee","3 eme Annee","4 eme Annee","5 eme Annee"];
        if (in_array($annee, $allanneetude)) {
            $idanne = array_search($annee, $allanneetude);
        } else {
        }
        $parcoure = Parcoure::find($mention);
        $matieres = $parcoure->matiere()->where('anneedetude', $idanne+1)->get();
        return view('schedule.index',[
            'matieres'=>$matieres,
            'parcoure'=>$parcoure,
            'annee'=>$annee]);
    }
    function presence($semaine, $mention, $annee) {
        $dateAVerifier = Carbon::parse('2024-01-18 10:51:44');
        list($annee, $semaine) = explode('-W', $semaine);
        $dateDebutSemaine = Carbon::now()->setISODate($annee, $semaine, 1)->startOfDay();
        $dateFinSemaine = $dateDebutSemaine->copy()->endOfWeek();
        $presence = Presence::whereBetween('jour', [$dateDebutSemaine, $dateFinSemaine])->get();
        return view('presence.index',[
            'presences'=>$presence]);
    }
}
