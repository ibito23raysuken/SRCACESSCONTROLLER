<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use App\Models\Journal;
use App\Models\Etudiant;
use App\Models\Presence;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EtudiantApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudiants = Etudiant::all(['id', 'ref_rfid']);
        return response()->json(['etudiants' => $etudiants]);
    }
    public function indexlisteetudiant()
    {
        return Etudiant::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function postpresence(Request $request)
    {
        $donnees = $request->all();
        foreach ($donnees as $element) {
            $etudiant = Etudiant::where('id', $element['id'])->first();
            Presence::create([
                'etudiant_id'=> $etudiant->id,
                'parcoure_id'=>$etudiant->parcoure_id,
                'matiere_id'=>5,
                'jour'=>Carbon::now(),
            ]);
        }
        return response()->json(['success' => $etudiant]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->json()->all();
        $etudiant = Etudiant::where('ref_rfid', $data['ref_rfid'])->first();
        Journal::create(
            [
            'etudiant_id'=> $etudiant->id,
            'parcoure_id'=>$etudiant->parcoure_id,
            'ref_lecteur'=>$data['ref_lecteur'],
            'heure'=>Carbon::now(),
            'jour'=>Carbon::now(),
            ]
        );
        return response()->json(['success' => $etudiant]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}