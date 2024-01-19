
@extends('base')

@section('content')
<section class="vh-100">
    <h1 class="display-3 text-center">Ajouter d'un Enseignant</h1>
    <div class="container-fluid m-5 ">
      <div class="row d-flex justify-content-center align-items-center ">
        <div class="col-md-4">
          <img src="{{ asset('images/image5.jpeg') }}"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-xl-4">
            <form  action="{{ route('enseignants.store') }}" method="POST">
                @csrf
                <div class="row mb-3">
                  <label for="nom" class="col-md-4 col-form-label text-md-end">Nom</label>
                  <div  class="col-md-6">
                    <input type="text" name="nom" class="form-control" id="InputNom" >
                    @error('nom')
                    <span role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                    <label for="prenom" class="col-md-4 col-form-label text-md-end">Prenom</label>
                    <div class="col-md-6">
                        <input type="text" name="prenom" class="form-control" id="Inputprenom" >
                        @error('prenom')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                </div>


                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Sexe') }}</label>
                    <div class="col-md-6">
                        <select class="form-select" name="sexe" aria-label="Default select example">
                            <option value="0">Selectionner sexe</option>
                            <option value="Homme">Homme</option>
                            <option value="Femme">Femme</option>
                        </select>
                        @error('sexe')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                {{-- ---------------------------------------------------------------------------------------------------- --}}
                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password"  autocomplete="new-password">

                        @error('password')
                            <strong>{{ $message }}</strong>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"   autocomplete="new-password">
                    </div>
                </div>
                {{-- ---------------------------------------------------------------------------------------------------- --}}
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-dark">Ajouter Enseignant</button>
                        <a href="{{ route('enseignants.index') }}"   class="btn btn-dark">Retour</a>
                    </div>
              </form>

        </div>
      </div>
    </div>
</div>
  </section>
  @endsection
