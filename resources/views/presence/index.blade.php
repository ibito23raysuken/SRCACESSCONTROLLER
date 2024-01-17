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
          </tr>
        </thead>
        @foreach ($presences as $presence)
        <tbody>
            <tr>
            <th scope="row">{{ $presence->id }}</th>
            <td>{{ $presence->nom_etudiant }}</td>
            <td>{{ $presence->ref_qrcode }}</td>
            </tr>
        </tbody>
    @endforeach
      </table>


@endsection
