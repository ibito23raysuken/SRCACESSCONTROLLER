
@extends('base')

@section('content')
<section class="vh-100">
    <h1 class="display-3 text-center">Ajouter d'un Cours Universitaire</h1>
    <div class="container-fluid m-5 ">
      <div class="row d-flex justify-content-center align-items-center ">
        <div class="col-md-4">
          <img src="{{ asset('images/image7.jpeg') }}"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-xl-4">
            <form  action="{{ route('cours.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="nomcours" class="form-label">Nom du Cours  Universitaire</label>
                  <input type="text" name="nomcours" class="form-control" id="InputNom" >
                </div>
                @error('nomcours')
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-dark">Enregistrer le Cours</button>
                        <a href="{{ route('parcoure.index') }}"   class="btn btn-dark">Retour</a>
                    </div>
              </form>

        </div>
      </div>
    </div>
</div>
  </section>
  @endsection
