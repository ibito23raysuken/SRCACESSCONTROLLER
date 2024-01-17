<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use Illuminate\Http\Request;
use App\Utilities\CoursManager;
use App\Http\Requests\CoursRequest;

class CoursController extends Controller
{
    private $coursManager;

    public function __construct(CoursManager $coursManager){
         $this->coursManager = $coursManager;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cours=Cours::all();
        return view('cours.index',[
            'cours'=>$cours]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cours.creation');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CoursRequest $request)
    {
        $cours=new Cours();
        $validate=$request->validated();
        $this->coursManager->build($cours,$request);
        return redirect()->route('cours.index')->with('success',"le Cours universitaire a ete enregistrer");
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
        $cours = Cours::find($id);
        $cours->delete();
        return redirect()->route('cours.index')->with('success',"Le Cours  a ete effacer ");
    }
}
