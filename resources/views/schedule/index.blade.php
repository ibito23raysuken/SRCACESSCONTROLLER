@extends('base')

@section('content')
@php
    $jours = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
    $heures = ['07:00', '08:00', '09:00', '10:00', '11:00','12:00','13:00', '14:00', '15:00', '16:00', '17:00','18:00'];
@endphp

<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <h2 class="display-6 text-center">Emploi du temps Parcours {{ $parcoure }} </h2>
                <label for="week">Choisissez une semaine en mai ou juin :</label>
                <input type="week" name="week" id="camp-week"/>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <th width="125">Heure</th>
                            @foreach ($jours as $jour)
                                <th>{{ $jour }}</th>
                            @endforeach
                        </thead>
                        <tbody>
                            @foreach ($heures as $heure)
                                <tr>
                                    <td>{{ $heure }}</td>
                                    @foreach ($jours as $jour)
                                        <td>
                                            @foreach ($matieres as $matiere)
                                                @if ($matiere->heure_debut <= $heure && $matiere->heure_fin >= $heure && $matiere->jour == $jour)
                                                    <a class="text-decoration-none" href="{{ route('presence') }}">{{$matiere->cours->nomcours}}</a>
                                                @endif
                                            @endforeach
                                        </td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
