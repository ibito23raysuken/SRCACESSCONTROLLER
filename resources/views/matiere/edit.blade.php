
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
    <h1 class="display-3 text-center">Modifier les information sur une Matiere</h1>
    <div class="container-fluid m-5 ">
      <div class="row d-flex justify-content-center align-items-center ">
        <div class="col-md-4">
          <img src="{{ asset('images/image6.png') }}"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-xl-4">
            <form  action="{{ route('matieres.update',$matiere) }}" method="POST">
                @csrf
                @method("PUT")
                <div class="mb-3">
                    <label for="cours_id" class="form-label">Nom du matiere</label>
                    <select name="cours_id" class="form-select" aria-label="Default select example">
                      <option value="0" >Choix du cours</option>
                      @foreach ($cours as $lecon )
                          <option
                          @if ($lecon->nomcours == $matiere->cours->nomcours)
                          selected
                      @endif
                      value="{{ $lecon->id }}">{{ $lecon->nomcours }}</option>
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
                              <input
                              @if ($jour  == $matiere->jour)
                              checked
                              @endif
                               type="radio" class="form-check-input" name="jour" name="optradio" value="{{ $jour }}">{{ $jour }}
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
                      <input id="heure_debut" type="datetime-local" class="form-control" name="heure_debut">
                  </div>
                  @error('heure_debut')
                  <span role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                  <div class="mb-3">
                      <label for="heure_fin" class="form-label">Choix de l'heure de fin</label>
                      <input id="heure_fin"  type="datetime-local" class="form-control" name="heure_fin">
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
                              <option
                              @if ($enseignant->nom == $matiere->enseignant->nom)
                              selected
                              @endif
                              value="{{ $enseignant->id }}">{{ $enseignant->nom }}</option>
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
                            <option
                            @if ($parcour->nomparcoure == $matiere->parcours->nomparcoure)
                            selected
                            @endif
                            value="{{ $parcour->id }}">{{ $parcour->nomparcoure }}</option>

                        @endforeach
                      </select>
                    </div>
                    @if($errors->has('parcours_id'))
                    <span role="alert">
                        <strong>{{ $errors->first('parcours_id') }}</strong>
                    </span>
                    @endif
                      <div class="d-flex gap-2">
                          <button type="submit" class="btn btn-dark">Modifier le Matiere</button>
                          <a href="{{ route('matieres.index') }}"   class="btn btn-dark">Retour</a>
                      </div>
              </form>

        </div>
      </div>
    </div>
</div>
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("#heure_debut",
    {
      enableTime: true,
      noCalendar: true,
      dateFormat: "H:i",
      time_24hr: true,
      defaultDate: "{{ $matiere->heure_debut }}"
      }
    );
    flatpickr("#heure_fin",
    {
      enableTime: true,
      noCalendar: true,
      dateFormat: "H:i",
      time_24hr: true,
      defaultDate: "{{ $matiere->heure_fin }}"
      }
    );

</script>
@endpush
  </section>
  @endsection
