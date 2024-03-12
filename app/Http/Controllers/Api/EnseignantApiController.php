<?php

namespace App\Http\Controllers\Api;

use App\Models\Enseignant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class EnseignantApiController extends Controller
{
    public function login(Request $request){
        try {
            $input=$request->all();
            $validator=Validator::make($input,["nom"=>"required","password"=>"required"]);
            if($validator->fails()){
                return  response()->json([
                        "status"=>false,
                        "message"=>"erreur de validation",
                        "error"=>$validator->errors(),
                ], 422,);
            }
            $enseignant = Enseignant::where('nom', $request->nom)->first();
            if (!$enseignant || !Hash::check($request->password, $enseignant->password)) {
                // L'authentification a échoué
                return response()->json(['message' => 'Invalid credentials'], 401);
            }

            $matieres = $enseignant->matiere;
            $token = $enseignant->createToken('authToken')->plainTextToken;
            return response()->json([
                "status" => true,
                'message' => 'Login successful',
                'data' => $enseignant,
                'token' => $token
            ]);
        } catch (\Throwable $th) {
            return  response()->json([
                "status"=>false,
                "message"=>$th->getMessage()
        ], 500,);
        }



    }
    public function register(Request $request){

    }
}
