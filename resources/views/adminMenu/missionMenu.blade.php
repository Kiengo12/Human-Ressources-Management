@extends('layouts.dashboardLayout')
@section('mission')
<div class="card white-box p-0">
    <div class="card-body">
        <h3 class="box-title mb-0">Les missions</h3>
    </div>
</div>    
 

  <div class="col-md-12">
    <div class="container">
      <div class="row hidden-md-up">
        @foreach($missions as $mission)
        <div class="col-md-4">
          <div class="card">
            <div class="card-block p-4">
              <h4 class="card-title">{{$mission->titre_mission}}</h4>
              <p class="card-text p-y-1">Nombre de candidats:{{$mission->nombre_candidats}}</p>
              <p class="card-text p-y-1">Date de debut:{{$mission->date_debut}}</p>
              <p class="card-text p-y-1">Date de debut:{{$mission->date_fin}}</p>
              <p class="card-text p-y-1 text-muted">Besoins et services sollicites: {{$mission->services_sollicites}}</p>
              <a href="#" class="card-link btn btn-info"><i class="fa fa-eye"></i></a>
              <a href="#" class="card-link btn btn-danger"><i class="fa fa-solid fa-trash"></i></a>
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