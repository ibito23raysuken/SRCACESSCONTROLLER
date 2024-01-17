<?php
namespace App\Utilities;

use App\Models\Parcoure;
use App\Http\Requests\ParcoureRequest;

class ParcoureManager{
    public function build(Parcoure $parcoure,ParcoureRequest $request){
        $parcoure->nomparcoure=$request->input('nomparcoure');
        $parcoure->save();
    }
}
?>
