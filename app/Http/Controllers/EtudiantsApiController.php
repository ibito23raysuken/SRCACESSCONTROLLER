<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Presence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EtudiantsApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return Etudiant::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $presence=new Presence();
        $reponses=$request->getContent();
        $jsonDatas = json_decode($reponses, true);
        foreach($jsonDatas as $jsondata){
            Presence::create([
                'nom_etudiant'=> $jsondata['nom'],
                'ref_etudiant'=> $jsondata['id'],
                'ref_qrcode'=> $jsondata['ref_qrcode'],
            ]);
            Log::info($jsondata['nom']);
        }

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
