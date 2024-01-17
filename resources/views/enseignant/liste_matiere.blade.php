@extends('base')

@section('content')
<div class="container">
    <h1 class="display-5 text-center">Liste des  cours tenue par {{ $enseignant->nom }} </h1>
          <table class="table mt-5">
            <thead>
              <tr>
                <th scope="col">#ID</th>
                <th scope="col">NOM du matiere</th>
              </tr>
            </thead>
            @foreach ($enseignant->matiere as $matiere)
            <tbody>
                <tr>
                <th scope="row">{{ $matiere->id }}</th>
                <td>{{ $matiere->cours->nomcours }}</td>
                </td>
                </tr>
            </tbody>
        @endforeach
          </table>
          <a href="{{ route('enseignants.index') }}"   class="btn btn-dark">Retour</a>
</div>
@endsection
