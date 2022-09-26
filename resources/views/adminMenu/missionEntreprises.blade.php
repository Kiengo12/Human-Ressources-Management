@extends('layouts.dashboardLayout')
@section('mission')
<div class="card white-box p-0">
    <div class="card-body">
        <h3 class="box-title mb-0">Les missions</h3>
    </div>
</div>  

@if($message = Session::get('success'))
                        <div class="alert alert-info alert-block">
                            
                            <strong>{{$message}}</strong>
                            <i class="fa-sharp fa-solid fa-circle-check"></i>
                        </div>

                    @endif

  <div class="col-md-12">
    <div class="container">
      <div class="row hidden-md-up">
        @foreach($missions as $mission)
        <div class="col-md-4">
          <div class="card shadow-sm p-1  bg-white rounded">
            <div class="card-block p-4">
              <h4 class="card-title">{{$mission->titre_mission}}</h4>
              <p class="card-text p-y-1">Nombre de candidats:{{$mission->nombre_candidats}}</p>
              <p class="card-text p-y-1">Date de debut:{{$mission->date_debut}}</p>
              <p class="card-text p-y-1">Date de debut:{{$mission->date_fin}}</p>
              <p class="card-text p-y-1 text-muted">Besoins et services sollicites: {{$mission->services_sollicites}}</p>
              <p class="card-text p-y-1 text-muted">Identifiants du demandeur: {{$mission->id_auth}}</p>
              <!--<a href="#" class="card-link btn btn-info"><i class="fa-solid fa-pen-to-square"></i></i></a>-->
              
              <button type="submit" class="btn btn-danger" onclick="document.getElementById('modal-open').style.display='block'"><i class="fa fa-solid fa-trash "></i></button>
              
            </div>
          </div>
        </div>
        <div class="modal" id="modal-open">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">La suppression est irreversible</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"  onclick="document.getElementById('modal-open').style.display='none'">
                  <span aria-hidden="true"></span>
                </button>
              </div>
              <div class="modal-body">
                <p>Voulez vous supprimer cette mission?</p>
              </div>
              <div class="modal-footer">
                <form action="{{route('missionEntreprise.delete',$mission->id)}}" method="POST">
                  @method('delete')
                  @csrf
                  <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>  
                <button type="button" class="btn btn-info" onclick="document.getElementById('modal-open').style.display='none'" data-bs-dismiss="modal">Fermer</button>
              </div>
            </div>
          </div>
        </div>
        @endforeach
       
        
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
  <script src="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.min.js"></script>
</body>

@endsection