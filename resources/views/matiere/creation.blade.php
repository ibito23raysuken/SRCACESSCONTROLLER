
@extends('base')

@section('content')
@push('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush
@php
    $jours = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi','Samedi','dimanche'];
    $heures = ['07h-08h', '08h-09h', '10h-11h', '12h-13h', '14h-15h','15h-16h','17h-18h'];
@endphp

<section class="vh-100">
    <h1 class="display-3 text-center">Ajouter d'une Nouvelle Matiere</h1>
    <div class="container-fluid m-5 ">
      <div class="row d-flex justify-content-center align-items-center ">
        <div class="col-md-4">
          <img src="{{ asset('images/image6.png') }}"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-xl-4">
            <form  action="{{ route('matieres.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="cours_id" class="form-label">Nom du matiere</label>
                  <select name="cours_id" class="form-select" aria-label="Default select example">
                    <option value="0" >Choix du cours</option>
                    @foreach ($cours as $lecon )
                        <option value="{{ $lecon->id }}">{{ $lecon->nomcours }}</option>
                    @endforeach
                  </select>
                </div>
                @if($errors->has('cours_id'))
                <span role="alert">
                    <strong>{{ $errors->first('cours_id') }}</strong>
                </span>
                @endif
                <div class="mb-3">
                    <label for="jour" class="form-label">choix de jour</label>
                    <div class="d-flex justify-content-start">
                        @foreach ($jours as $jour )
                        <div name="jour"  class="form-check">
                            <input type="radio" class="form-check-input" name="jour" name="optradio" value="{{ $jour }}">{{ $jour }}
                        </div>
                        @endforeach
                    </div>
                </div>
                @error('jour')
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="mb-3">
                    <label for="heure_debut" class="form-label">Choix de l'heure de debut</label>
                    <input type="datetime-local" class="form-control" name="heure_debut">
                </div>
                @error('heure_debut')
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="mb-3">
                    <label for="heure_fin" class="form-label">Choix de l'heure de fin</label>
                    <input type="datetime-local" class="form-control" name="heure_fin">
                </div>
                @error('heure_fin')
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="mb-3">
                    <label for="enseignant" class="form-label">Choix de l'enseignant</label>
                    <select name="enseignant" class="form-select" aria-label="Default select example">
                        <option value="0" >Choix de l'enseigant</option>
                        @foreach ($enseignants as $enseignant )
                            <option value="{{ $enseignant->id }}">{{ $enseignant->nom }}</option>
                        @endforeach
                      </select>
                </div>
                @if($errors->has('enseignant'))
                    <span role="alert">
                        <strong>{{ $errors->first('enseignant') }}</strong>
                    </span>
                @endif
                <div class="mb-3">
                    <label for="parcours_id" class="form-label">Choix du parcours</label>
                    <select name="parcours_id" class="form-select" aria-label="Default select example">
                      <option value="0" >Choix du parcours</option>
                      @foreach ($parcoures as $parcour )
                          <option value="{{ $parcour->id }}">{{ $parcour->nomparcoure }}</option>
                      @endforeach
                    </select>
                  </div>
                  @if($errors->has('parcours_id'))
                  <span role="alert">
                      <strong>{{ $errors->first('parcours_id') }}</strong>
                  </span>
                  @endif
                  <div class="mb-3">
                    <label for="parcoure" class="form-label">Veuillez sélectionner l'annee d'etude.</label>
                    <select class="form-select" name="Annedetude" aria-label="Default select example">
                        <option value="0">Annee d'etude</option>
                        <option value="1">1 ere Annee</option>
                        <option value="2">2 eme Annee</option>
                        <option value="3">3 eme Annee</option>
                        <option value="4">4 eme Annee</option>
                        <option value="5">5 eme Annee</option>
                      </select>
                    </div>
                    @error('Annedetude')
                    <span role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-dark">Enregistrer le Matiere</button>
                        <a href="{{ route('matieres.index') }}"   class="btn btn-dark">Retour</a>
                    </div>
              </form>

        </div>
      </div>
    </div>
</div>
  </section>
  @push('scripts')
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script>
      flatpickr("input[type=datetime-local]",
      {
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
        time_24hr: true
        }
        );

  </script>
  @endpush
  @endsection
