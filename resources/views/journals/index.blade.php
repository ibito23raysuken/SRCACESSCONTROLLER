@extends('base')

@section('content')

<div class="container">

    <h1 class="display-3 text-center">Journal des entrées sur le contrôle d'accès</h1>
    <table class="table mt-5">
        <thead>
          <tr>
            <th scope="col">#ID</th>
            <th scope="col">Nom de l'etudiant</th>
            <th scope="col">Parcours</th>
            <th scope="col">Année d'études</th>
            <th scope="col">Heure</th>
            <th scope="col">Date</th>
            <th scope="col">Lecteur</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($journals as $journal)
            <tbody>
                <tr>
                <th scope="row">{{ $journal->id }}</th>
                <th scope="row">{{ $journal->etudiant->nom }}</th>
                <th scope="row">{{ $journal->etudiant->parcoure->nomparcoure }}</th>
                <th scope="row">{{ $journal->etudiant->anneedetude }} eme annnee</th>
                <th scope="row">{{ $journal->heure }}</th>
                <th scope="row">{{ \Illuminate\Support\Carbon::parse($journal->jour)->format('Y-m-d') }}</th>
                <th scope="row">{{ $journal->ref_lecteur }}</th>
                </tr>
            </tbody>
        @endforeach
        </tbody>
      </table>

      <div >
        {{ $journals->links('modal.pagination') }}
    </div>
@endsection
