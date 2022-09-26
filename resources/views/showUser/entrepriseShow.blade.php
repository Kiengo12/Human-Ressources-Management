@extends('layouts.DashboardLayout1')
@section('show')
@foreach($utilisateurs as $utilisateur)
<div class="row">
    <!-- Column -->
    <div class="col-lg-4 col-xlg-3 col-md-12">
    <div class="white-box">
    <div class="user-bg"> <img width="100%" alt="user" src="../images/profil.png">
        <div class="overlay-box">
            <div class="user-content">
                <a href="javascript:void(0)"><img src="{{$utilisateur->photo_profile}}"
                        class="thumb-lg img-circle" alt="img"></a>
                <h4 class="text-white mt-2">{{$utilisateur->nom}}</h4>
                <h5 class="text-white mt-2">{{$utilisateur->email}} </h5>
            </div>
        </div>
    </div>
    <div class="user-btm-box mt-5 d-md-flex">
        <div class="col-md-12 col-sm-4 text-center">
            <h3>Numero d'identification</h4>
            <h1>{{$utilisateur->id}}</h1>
        </div>
        
    </div>
    </div>
    </div>


    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-8 col-xlg-9 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="form-group mb-4">
                    <label class="col-md-12 p-0">Nom de l'entreprise</label>
                    <div class="col-md-12 border-bottom p-0">
                        <p><b>{{$utilisateur->nom_entreprise}}</b></p>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Noms et prenoms du representant legal</label>
                        <div class="col-md-12 border-bottom p-0">
                            <p><b>{{$utilisateur->nom}}</b></p>
                            </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Noms et prenoms du representant juridique</label>
                        <div class="col-md-12 border-bottom p-0">
                            <p><b>{{$utilisateur->prenom}}</b></p>
                            </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Email</label>
                        <div class="col-md-12 border-bottom p-0">
                            <p><b>{{$utilisateur->email}}</b></p>
                            </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Numero de telephone</label>
                        <div class="col-md-12 border-bottom p-0">
                            <p><b>{{$utilisateur->phone}}</b></p>
                            </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Domaine d'action</label>
                        <div class="col-md-12 border-bottom p-0">
                            <p><b>{{$utilisateur->domaine_expertise}}</b></p>
                            </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Forme juridique de l'entreprise</label>
                        <div class="col-md-12 border-bottom p-0">
                            <p><b>{{$utilisateur->type_entreprise}}</b></p>
                            </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Annees d'existence</label>
                        <div class="col-md-12 border-bottom p-0">
                            <p><b>{{$utilisateur->annee_experience}}</b></p>
                            </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">References</label>
                        <div class="col-md-12 border-bottom p-0">
                            <p><b>{{$utilisateur->references}}</b></p>
                            </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Pays</label>
                        <div class="col-md-12 border-bottom p-0">
                            <p><b>{{$utilisateur->pays}}</b></p>
                            </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Ville</label>
                        <div class="col-md-12 border-bottom p-0">
                            <p><b>{{$utilisateur->ville}}</b></p>
                            </div>
                    </div>
                    
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Breve description de l'entreprise</label>
                        <div class="col-md-12 border-bottom p-0">
                            <p><b>{{$utilisateur->resume}}</b></p>
                            </div>
                    </div>
                    
                </div>
            </div>
        </div>
                    <!-- Column -->
    </div>
    @endforeach
    
@endsection