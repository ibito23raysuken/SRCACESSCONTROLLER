<?php

namespace App\Http\Controllers;

use App\Models\Parcoure;
use App\Models\Enseignant;
use Illuminate\Http\Request;
use App\Utilities\EnseignantManager;
use App\Http\Requests\EnseignantRequest;


class EnseignantController extends Controller
{
    private $enseignantManager;

    public function __construct(EnseignantManager $enseignantManager){
         $this->enseignantManager = $enseignantManager;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enseignants=Enseignant::paginate('10');
        return view('enseignant.index',[
            'enseignants'=>$enseignants]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('enseignant.ajoutEnseignant');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EnseignantRequest $request)
    {
        $enseignant=new Enseignant();
        $validate=$request->validated();
        $this->enseignantManager->build($enseignant,$request);
        return redirect()->route('enseignants.index')->with('success',"L'enseignant a été enregistré");
    }

    /**
     * Display the specified resource.
     */
    public function show(Enseignant $enseignant)
    {
        return view('enseignant.liste_matiere',[
            'enseignant'=>$enseignant]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enseignant $enseignant)
    {
        return view('enseignant.edit',[
            'enseignant'=>$enseignant
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EnseignantRequest $enseignantRequest, Enseignant $enseignant)
    {
        $validate=$enseignantRequest->validated();
        $this->enseignantManager->build($enseignant,$enseignantRequest);
        return redirect()->route('enseignants.index')->with('success',"Les informations sur l'enseignant ont été modifiées");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enseignant $enseignant)
    {
        $enseignant->delete();
        return redirect()->route('enseignants.index')->with('success',"L'enseignant a été effacé");
    }
}
