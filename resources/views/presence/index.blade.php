@extends('base')

@section('content')

<div class="container">

    <h1 class="display-3 text-center">Liste des étudiants présents. </h1>
    <table class="table mt-5">
        <thead>
          <tr>
            <th scope="col">#ID</th>
            <th scope="col">Nom de l'etudiant</th>
            <th scope="col">Parcours</th>
            <th scope="col">Matiere</th>
            <th scope="col">date</th>
          </tr>
        </thead>
        @foreach ($presences as $presence)
        <tbody>
            <tr>
            <th scope="row">{{ $presence->id }}</th>
            <th scope="row">{{ $presence->etudiant->nom }}</th>
            <th scope="row">{{ $presence->matiere->parcours->nomparcoure }}</th>
            <th scope="row">{{ $presence->matiere->cours->nomcours }}</th>
            <th scope="row">{{ $presence->jour }}</th>
            </tr>
        </tbody>
    @endforeach
      </table>


@endsection
