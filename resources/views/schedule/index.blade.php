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
                <h2 class="display-6 text-center">Emploi du temps Parcours {{ $parcoure->nomparcoure }} </h2>
                <h2 class="display-6 text-center">En classe de  {{ $annee }} </h2>
                <label for="week">Choisissez une semaine:</label>
                <input type="week" name="week" id="champ-week"/>
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
                                                    <a class="text-decoration-none generate-url" id="cours" jour={{ $jour }} heure={{ $heure }} cours={{$matiere->cours->nomcours}} href="">{{$matiere->cours->nomcours}}</a>
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
@push('scripts')
    {{-- Script JavaScript --}}
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
$(document).ready(function() {
    var cours,url,jour,heure;

    $('#champ-week').on('change', function() {
        var selectedWeek = $(this).val();
        var parcoure = '{{ $parcoure->nomparcoure }}';
        var anneedetude = '{{ $annee }}';
        url = '{{ route("presence", ["semaine" => ":semaine","parcoure" => ":parcoure","anneedetude" => ":anneedetude","cours" => ":cours","jour" =>":jour","heure" => ":heure"]) }}';
        url = url.replace(':semaine', selectedWeek);
        url = url.replace(':parcoure', parcoure);
        url = url.replace(':anneedetude', anneedetude['0']);
        $(document).on('click', '.generate-url', function(event) {
        event.preventDefault();
        cours = $(this).attr('cours');
        jour = $(this).attr('jour');
        heure = $(this).attr('heure');
        console.log('Cours sélectionné : ' + anneedetude['0']);
        url = url.replace(':cours', cours);
        url = url.replace(':jour', jour);
        url = url.replace(':heure', heure);
        console.log(url);
        $('.generate-url').attr('href',  url);
        window.location.href = url;
    });
    });
});
//
    </script>
@endpush
