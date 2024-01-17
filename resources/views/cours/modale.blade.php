<div id="myModal-{{ $uncour->id }}" class="modal fade show" tabindex="-1" role="modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Suppression du Cours de {{ $uncour->nomcours  }}</h5>
          <button type="button" class="btn-close" onclick="document.getElementById('myModal-{{ $uncour->id }}').style.display='none'" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Voulez-vous supprimer cette Cours car plusieur donnees sont liee avec cette objet</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" onclick="document.getElementById('myModal-{{ $uncour->id }}').style.display='none'" >Non</button>
          <form method="POST"  action="{{ route('cours.destroy',$uncour->id) }}">
            @method("DELETE")
            @csrf
            <button type="submit" class="btn btn-primary">OUI</button>
         </form>

        </div>
      </div>
    </div>
  </div>
