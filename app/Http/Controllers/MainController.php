<?php

namespace App\Http\Controllers;

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
        $parcoure = Parcoure::find($mention);
        $matieres = $parcoure->matiere;
        return view('schedule.index',[
            'matieres'=>$matieres,
            'parcoure'=>$parcoure,
            'annee'=>$annee]);
    }
    function presence() {
        $presence=Presence::paginate('20');
        return view('presence.index',[
            'presences'=>$presence]);
    }
}
