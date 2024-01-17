@extends('base')

@section('content')
<div class="container-fluid p-5">
    <div class="container  p-5">
        <div class="container">
      <!--Section: Content-->
      <section>
        <div class="row">
          <div class="col-md-6 gx-5 mb-4">
            <div class="bg-image hover-overlay ripple shadow-2-strong " data-mdb-ripple-color="light">
              <img src="images/image1.jpg" class="img-fluid rounded-5" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
          </div>

          <div class="col-md-6 gx-5 mb-4">
            <h4><strong>Description de l'ESPA ANTSIRANANA</strong></h4>
            <p class="text-muted">
                L'Université d'Antsiranana - École supérieure polytechnique (ESPA) est un établissement public situé à Antsiranana, Madagascar.
                 Il s'agit d'une institution d'enseignement supérieur récente, car elle a ouvert ses portes en 1977.
            </p>
            <p class="text-muted">
                L'Université d'Antsiranana - École supérieure polytechnique (ESPA) mène des recherches dans divers domaines d'étude.
                Vous pouvez les trouver sur le site officiel. Le campus de l'établissement éducatif est situé à Antsiranana.
            </p>
          </div>
        </div>
      </section>
      <!--Section: Content-->

      <hr class="my-5" />

      <!--Section: Content-->
      <section class="text-center">
        <h4 class="mb-5"><strong>Description de l"Application</strong></h4>

        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="images/image2.jpg" class="img-fluid rounded-5" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Creation de carte etudiant</h5>
                <p class="card-text">
                    Permet de créer une carte étudiant et de l'enregistrer dans la base de données avec un QR code.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="images/image3.jpg" class="img-fluid rounded-5" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Gestion des accès</h5>
                <p class="card-text">
                    La "gestion des accès" pour
                    contrôler et réguler qui a la permission d'accéder à
                    des systèmes informatiques, des installations physiques, des données ou d'autres ressources.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="images/image4.webp" class="img-fluid rounded-5" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Gestion des bases de données</h5>
                <p class="card-text">
                    La gestion de base de données est le processus de stockage, d'organisation et de manipulation de données de manière efficace et sécurisée.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <hr class="my-5" />
    </div>
</div>

@endsection
