@extends('base')

@section('content')
    <div class="container  p-5">
        <div class="container">
            <div class="card text-center mt-5">
                <div class="card-header">
                    <h1>Carte Étudiante</h1>
                </div>
                <div class="row no-gutters">
                    <div class="col-md-3">
                        <img src="{{ asset('images/'.$imagepath) }}" class="img-thumbnail" alt="logo">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title">Nom: {{ $etudiantinfo->nom  }}</h5>
                            <h5 class="card-title">Prenom: {{ $etudiantinfo->prenom  }}</h5>
                            <h5 class="card-title">sexe: {{ $etudiantinfo->sexe  }}</h5>
                            <h5 class="card-title">date de naissance: {{ $etudiantinfo->birth_day  }}</h5>
                            <h5 class="card-title">lieu de naissance: {{ $etudiantinfo->lieudenaissance  }}</h5>
                            <h5 class="card-title">Parcoure: {{ $parcoureetudiant }}</h5>
                            <h5 class="card-title">Annee d'etude: {{ $etudiantinfo->Annedetude  }} annees</h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        {{ $qrcode }}
                        <h5 class="card-title">reference RFID: {{ $etudiantinfo->ref_rfid }}</h5>
                    </div>
                </div>
            </div>
            <a href="{{ route('etudiants.index') }}" class="btn btn-dark mt-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4.5 5.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                  </svg>
                  voir liste des etudiants</a>
        </div>

</div>
@endsection
