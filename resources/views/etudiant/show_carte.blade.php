@extends('base')

@section('content')
<div class="container  p-5">
    <div class="container">
        <div class="card text-center card border-dark mt-5">
            <div class="card-header">
                <h1>Carte Étudiante</h1>
            </div>
            <div class="row ">
                <div class="col-md-3 d-flex justify-content-center">
                        <img src="{{ asset('images/'.$etudiant->imagepath) }}" class="img-thumbnail" alt="logo">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 fw-bold fs-6">Nom:</div>
                            <div class="col-8 d-flex justify-content-start fs-6"> {{ $etudiant->nom  }}</div>
                            <div class="col-4 fw-bold fs-6">Prenom: </div>
                            <div class="col-8 d-flex justify-content-start"> {{ $etudiant->prenom  }}</div>
                            <div class="col-4 fw-bold fs-6">Sexe: </div>
                            <div class="col-8 d-flex justify-content-start"> {{ $etudiant->sexe  }}</div>
                            <div class="col-4 fw-bold fs-6">Date de naissance:</div>
                            <div class="col-8 d-flex justify-content-start">  {{ $etudiant->datedenaissance  }}</div>
                            <div class="col-4 fw-bold fs-6">Lieu de naissance: </div>
                            <div class="col-8 d-flex justify-content-start">{{ $etudiant->lieudenaissance  }}</div>
                            <div class="col-4 fw-bold fs-6">Parcoure:</div>
                            <div class="col-8 d-flex justify-content-start"> {{ $etudiant->parcoure->nomparcoure  }}</div>
                            <dtdiv class="col-4 fw-bold fs-6">Annee d'etude:</dtdiv>
                            <div class="col-8 d-flex justify-content-start"> {{ $etudiant->anneedetude  }} annees </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="m-3 d-flex justify-content-center">
                        {{ $qrcode }}
                    </div>
                    <h5 class="card-title">reference RFID: {{ $etudiant->ref_rfid }}</h5>
                </div>
            </div>
        </div>
        <a href="{{ route('etudiants.index') }}" class="btn btn-dark m-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4.5 5.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
              </svg>
              voir liste des etudiants</a>
@endsection
