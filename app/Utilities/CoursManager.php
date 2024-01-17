<?php
namespace App\Utilities;

use App\Models\Cours;
use App\Http\Requests\CoursRequest;


class CoursManager{
    public function build(Cours $cours,CoursRequest $request){
        $cours->nomcours=$request->input('nomcours');
        $cours->save();
    }
}
?>
