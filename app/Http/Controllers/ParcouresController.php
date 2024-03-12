<?php

namespace App\Http\Controllers;

use App\Models\Parcoure;
use App\Models\Enseignant;
use Illuminate\Http\Request;
use App\Utilities\ParcoureManager;
use App\Http\Requests\ParcoureRequest;

class ParcouresController extends Controller
{
    private $parcoureManager;

    public function __construct(ParcoureManager $parcoureManager){
         $this->parcoureManager = $parcoureManager;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parcoures=Parcoure::all();
        return view('parcoure.index',[
            'parcoures'=>$parcoures]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('parcoure.creation');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ParcoureRequest $request)
    {
        $parcoure=new Parcoure();
        $validate=$request->validated();
        $this->parcoureManager->build($parcoure,$request);
        return redirect()->route('parcoure.index')->with('success',"Le parcours universitaire a été enregistré");
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
    public function destroy(Parcoure $parcoure)
    {
        $parcoure->delete();
        return redirect()->route('parcoure.index')->with('success',"Le parcours a été effacé");
    }
}
