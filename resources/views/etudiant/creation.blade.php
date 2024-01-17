
@extends('base')

@section('content')
@push('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush
<section class="vh-100">
    <h1 class="display-3 text-center">Crée une carte étudiant</h1>
    <div class="container-fluid m-5 ">
      <div class="row d-flex justify-content-center align-items-center ">
        <div class="col-md-9 col-lg-6 ">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-xl-4">
            <form  action="{{ route('etudiants.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <input type="file" name="image" class="form-control">
                </div>
                @error('image')
                <span role="alert">
                    <strong class="text-danger ">{{ $message }}</strong>
                </span>
                @enderror
                <div class="mb-3">
                  <label for="nom" class="form-label">Nom</label>
                  <input type="text" name="nom" class="form-control" id="InputNom" value="{{ old('nom') }}" >
                </div>
                @error('nom')
                <span role="alert">
                    <strong class="text-danger ">{{ $message }}</strong>
                </span>
                @enderror
                <div class="mb-3">
                    <label for="prenom" class="form-label">Prenom</label>
                    <input type="text" name="prenom" class="form-control" id="Inputprenom" value="{{ old('prenom') }}" >
                </div>
                @error('prenom')
                <span role="alert">
                    <strong class="text-danger ">{{ $message }}</strong>
                </span>
                @enderror
                <div class="mb-3">
                <select class="form-select" name="sexe" aria-label="Default select example">
                    <option value="0">Selectionner sexe</option>
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
                  </select>
                </div>
                @error('sexe')
                <span role="alert">
                    <strong class="text-danger ">{{ $message }}</strong>
                </span>
                @enderror
                <div class="mb-3">
                    <label for="join" class="form-label">Date de Naissance</label>
                    <input type="datetime-local" class="form-control" name="birth_day">
                </div>
                @error('birth_day')
                <span role="alert">
                    <strong class="text-danger ">{{ $message }}</strong>
                </span>
                @enderror
                <div class="mb-3">
                    <label for="lieudenaissance" class="form-label">Lieu de Naissance</label>
                    <input type="text" class="form-control" name="lieudenaissance" id="Inputprenomlieudenaissance" value="{{ old('lieudenaissance') }}">
                </div>
                @error('lieudenaissance')
                <span role="alert">
                    <strong class="text-danger ">{{ $message }}</strong>
                </span>
                @enderror

                <div class="mb-3">
                    <label for="ref_rfid" class="form-label">Reference RFID</label>
                    <input type="text" class="form-control" name="ref_rfid" id="Inputref_rfid" value="{{ old('ref_rfid') }}">
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
                            <option  selected value="">Choix du parcoure</option>
                            @foreach ($parcoures as $parcoure )
                                <option value="{{ $parcoure->id }}">{{ $parcoure->nomparcoure }}</option>
                            @endforeach
                          </select>
                    </div>
                    @error('parcoure')
                    <span role="alert">
                        <strong class="text-danger ">{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
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
                        <strong class="text-danger ">{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-dark">Creer une carte</button>
                        <a href="{{ route('etudiants.index') }}"   class="btn btn-dark"> <img src="{{ asset('images/arrow-left.svg') }}"> Retour</a>
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
      flatpickr("input[type=datetime-local]");
  </script>
  @endpush
  @endsection
