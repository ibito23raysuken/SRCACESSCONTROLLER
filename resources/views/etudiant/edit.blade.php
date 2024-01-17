
@extends('base')

@section('content')

@push('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush
<section class="vh-100">
    <h1 class="display-3 text-center">Modifier une carte étudiant</h1>
    <div class="container-fluid m-5 ">
      <div class="row d-flex justify-content-center align-items-center ">
        <div class="col-md-9 col-lg-6 ">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-xl-4">
            <form  action="{{ route('etudiants.update',$etudiant) }}" method="POST" enctype="multipart/form-data">
            @method("PUT")
            @csrf
            <div class="col-md-6">
                <input type="hidden" name="image" value="{{ $etudiant->imagepath }}">
            </div>
            @error('image')
                <span role="alert">
                    <strong class="text-danger ">{{ $message }}</strong>
                </span>
                @enderror
            <div class="mb-3">
              <label for="nom" class="form-label">Nom</label>
              <input type="text" value="{{ $etudiant->nom }}" name="nom" class="form-control" id="InputNom" >
            </div>
            @error('nom')
            <span role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <div class="mb-3">
                <label for="prenom" class="form-label">Prenom</label>
                <input type="text" value="{{ $etudiant->prenom }}" name="prenom" class="form-control" id="Inputprenom" >
            </div>
            @error('prenom')
            <span role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <div class="mb-3">
            <select class="form-select" name="sexe" aria-label="Default select example">
                <option value="0">Selectionner sexe</option>
                <option
                @if ($etudiant->sexe=="Homme")
                    selected
                @else
                @endif
                value="Homme">Homme</option>
                <option
                @if ($etudiant->sexe=="Femme")
                    selected
                @else

                @endif
                value="Femme" >Femme</option>
              </select>
            </div>
            @error('sexe')
            <span role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <div class="mb-3">
                <label for="join" class="form-label">Date de Naissance</label>
                <input value=""  type="datetime-local" class="form-control" name="birth_day">
            </div>
            @error('birth_day')
            <span role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <div class="mb-3">
                <label for="lieudenaissance" class="form-label">Lieu de Naissance</label>
                <input  type="text" class="form-control" name="lieudenaissance" value="{{ $etudiant->lieudenaissance }}"  id="Inputprenomlieudenaissance" >
            </div>
            @error('lieudenaissance')
            <span role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <div class="mb-3">
                <label for="ref_rfid" class="form-label">Reference RFID</label>
                <input type="text" class="form-control" name="ref_rfid" id="Inputref_rfid" value="{{ $etudiant->ref_rfid }}">
            </div>
            @error('ref_rfid')
            <span role="alert">
                <strong class="text-danger ">{{ $message }}</strong>
            </span>
            @enderror

            <div class="mb-3">
                <div class="mb-3">
                    <label for="parcoure" class="form-label">Veuillez sélectionner un parcours.</label>
                    <select name="parcoure" class="form-select" aria-label="Default select example">
                        <option  selected>Choix du parcoure</option>
                        @foreach ($parcoures as $parcoure )
                            <option
                            @if ($parcoure->nomparcoure == $etudiant->parcoure->nomparcoure)
                                selected
                            @endif
                                value="{{ $parcoure->id }}">{{ $parcoure->nomparcoure }}</option>
                        @endforeach
                      </select>
                </div>
                @error('enseignant')
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            @error('parcoure')
            <span role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <div class="mb-3">
                <label for="parcoure" class="form-label">Veuillez sélectionner l'annee d'etude.</label>
                <select class="form-select" name="Annedetude" value="{{ $etudiant->anneedetude }}" aria-label="Default select example">
                    <option value="0">Annee d'etude</option>
                    <option
                    @if ($etudiant->anneedetude=="1")
                    selected
                    @endif
                    value="1">1 ere Annee</option>
                    <option
                    @if ($etudiant->anneedetude=="2")
                    selected
                    @endif
                    value="2">2 eme Annee</option>
                    <option
                    @if ($etudiant->anneedetude=="3")
                    selected
                    @endif
                    value="3">3 eme Annee</option>
                    <option
                    @if ($etudiant->anneedetude=="4")
                    selected
                    @endif
                    value="4">4 eme Annee</option>
                    <option
                    @if ($etudiant->anneedetude=="5")
                    selected
                    @endif
                    value="5">5 eme Annee</option>
                  </select>
                </div>
                @error('Annedetude')
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-dark">Modifier la carte</button>
                    <a href="{{ route('etudiants.index') }}"   class="btn btn-dark">Retour</a>
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
    const config = {
        defaultDate: "{{ $etudiant->datedenaissance }}",
    };
    flatpickr("input[type=datetime-local]",config);
</script>
@endpush
@endsection
