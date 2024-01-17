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
    function schedule(String $parcoure) {
        $parcour = Parcoure::find($parcoure);
        $matieres = $parcour->matiere;
        return view('schedule.index',[
            'matieres'=>$matieres,
            'parcoure'=>$parcoure]);
    }
    function presence() {
        $presence=Presence::paginate('20');
        return view('presence.index',[
            'presences'=>$presence]);
    }
}
