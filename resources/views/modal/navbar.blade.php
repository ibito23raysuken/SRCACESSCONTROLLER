<nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home') }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
      </svg>
      ESPA ACCESS CONTROL SYSTEME
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            @if (Auth::user())
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Gestion Des BD
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="{{ route('etudiants.index') }}" >Liste des etudiants</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="{{ route("enseignants.index") }}">Liste des enseignants</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="{{ route("cours.index") }}">Liste des Cours</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="{{ route("parcoure.index") }}">Liste des Parcoure</a></li>
                </ul>
              </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="nav-link dropdown-toggle"  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Emploie du temps
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item subcreation" href="{{ route("matieres.index") }}">Creer une matiere</a></li>
                            @php
                                $allanneetude = ["1 ere Annee","2 eme Annee","3 eme Annee","4 eme Annee","5 eme Annee"];
                            @endphp
                            @foreach ($liste_parcoure as $mention)
                                <li  class="sub_menu dropdown-item dropdown-submenu dropend">
                                    <a class="btn ">
                                        {{$mention->nomparcoure}}
                                    </a>
                                    <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="visually-hidden">{{$mention->nomparcoure}}</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        @foreach ($allanneetude as $anneetude)
                                            <a class="dropdown-item subsubmenu"  href="{{ route('schedule', ['mention' => $mention->id, 'annee' => $anneetude])}}">{{ $anneetude}}</a>
                                         @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                      </div>
                  </li>
            @else
            @endif
        </ul>
        <ul class="navbar-nav mr-auto">
            @if (!Auth::user())
            <li class="nav-item">
                <form method="POST" action="">
                    @csrf
                    <a  class="btn btn-light" href="{{ route("login") }} ">Connexion</a>
                </form>
            </li>
            @else
            <li class="nav-item d-flex align-items-center">
                <p class="text-white bg-dark text-lg mx-2 mt-2 pt-2">Bonjour, {{ Auth::user()->name }}</p>
                    <div class="dropdown">
                        <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <img src="{{ asset('images/person-circle.svg') }}" class="me-3">
                        </button>
                        <div class="dropdown-menu dropdown-menu-end mt-2">
                            <form method="POST" action="/logout" >
                            @csrf
                            <div class=" mx-5 my-3">
                                <a class="link-offset-2 link-underline link-underline-opacity-0" href="/register">Creer compte</a>
                            </div>
                            <div class="mx-5 my-3">
                                <button class="btn btn-light" type="submit">Déconnexion</button>
                            </div>
                        </form>
                        </div>
                      </div>
            </li>
            @endif
        </ul>
      </div>
    </div>

  </nav>
