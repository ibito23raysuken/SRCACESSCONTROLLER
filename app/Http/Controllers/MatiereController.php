<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use App\Models\Matiere;
use App\Models\Parcoure;
use App\Models\Enseignant;
use Illuminate\Http\Request;
use App\Utilities\MatiereManager;
use App\Http\Requests\MatiereRequest;

class MatiereController extends Controller
{
    private $matiereManager;

    public function __construct(MatiereManager $matiereManager){
         $this->matiereManager = $matiereManager;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matieres=Matiere::paginate('10');
        return view('matiere.index',[
            'matieres'=>$matieres]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parcoures=Parcoure::all();
        $cours=Cours::all();
        $enseignants=Enseignant::all();
        return view('matiere.creation',[
            'enseignants'=>$enseignants,
            'cours'=>$cours,
            'parcoures'=>$parcoures]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MatiereRequest $request)
    {
        $matiere=new Matiere();
        $validate=$request->validated();
        $this->matiereManager->build($matiere,$request);
        return redirect()->route('matieres.index')->with('success',"le matiere a ete enregistrer");
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
    public function edit(Matiere $matiere)
    {
        $parcoures=Parcoure::all();
        $cours=Cours::all();
        $enseignants=Enseignant::all();
        return view('matiere.edit',[
            'matiere'=>$matiere,
            'enseignants'=>$enseignants,
            'cours'=>$cours,
            'parcoures'=>$parcoures
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MatiereRequest $matiererequest, Matiere $matiere)
    {
        $validate=$matiererequest->validated();
        $this->matiereManager->build($matiere,$matiererequest);
        return redirect()->route('matieres.index')->with('success',"les informations sur la matiere a ete modifier");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matiere $matiere)
    {
        $matiere->delete();
        return redirect()->route('matieres.index')->with('success',"La matiere a ete effacer ");
    }
}
