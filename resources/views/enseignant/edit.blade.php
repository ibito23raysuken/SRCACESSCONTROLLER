
@extends('base')

@section('content')
<section class="vh-100">
    <h1 class="display-3 text-center">Modifier les information sur un Enseignant</h1>
    <div class="container-fluid m-5 ">
      <div class="row d-flex justify-content-center align-items-center ">
        <div class="col-md-4">
          <img src="{{ asset('images/image5.jpeg') }}"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-xl-4">
            <form  action="{{ route('enseignants.update',$enseignant) }}"  method="POST">
                @csrf
                @method("PUT")
                @csrf
                <div class="mb-3">
                  <label for="nom" class="form-label">Nom</label>
                  <input value="{{ $enseignant->nom }}" b type="text" name="nom" class="form-control" id="InputNom" >
                </div>
                @error('nom')
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="mb-3">
                    <label for="prenom" class="form-label">Prenom</label>
                    <input value="{{ $enseignant->prenom }}" type="text" name="prenom" class="form-control" id="Inputprenom" >
                </div>
                @error('prenom')
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="mb-3">
                <select class="form-select" name="sexe" aria-label="Default select example">
                    <option
                    @if ($enseignant->sexe=="Homme")
                    selected
                    @else
                    @endif
                    value="Homme">Homme</option>
                    <option
                    @if ($enseignant->sexe=="Femme")
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
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-dark">Modifier Enseignant</button>
                        <a href="{{ route('enseignants.index') }}"   class="btn btn-dark">Retour</a>
                    </div>
              </form>

        </div>
      </div>
    </div>
</div>
  </section>
  @endsection
