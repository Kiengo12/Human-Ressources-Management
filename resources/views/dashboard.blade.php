@extends('layouts.DashboardLayout')
@section('contenuDashboard')
@if(Auth::user()->role == 'admin')       
        <!-- ============================================================== -->
                <!-- PRODUCTS YEARLY SALES -->
                <!-- ============================================================== -->
                @if($message = Session::get('success'))
                        <div class="alert alert-info alert-block">
                            
                            <strong>{{$message}}</strong>
                            <i class="fa-sharp fa-solid fa-circle-check"></i>
                        </div>

                    @endif
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Statistiques</h3>
                            <div id="ct-visits" style="height: 405px;">
                                <div class="chartist-tooltip" style="top: -17px; left: -12px;"><span
                                        class="chartist-tooltip-value">6</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- RECENT SALES -->
                <!-- ============================================================== -->
               
                <!-- ============================================================== -->
                <!-- Recent Comments -->
                <!-- ============================================================== -->
                
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
    
    
@endif

          
 @if(Auth::user()->role == 'postulant')

 <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                @if($message = Session::get('success'))
                     <div class="alert alert-info alert-block">
                            
                        <strong>{{$message}}</strong>
                        <i class="fa-sharp fa-solid fa-circle-check"></i>
                    </div>

                @endif
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-12">
                        <div class="white-box">
                            <div class="user-bg"> <img width="100%" alt="user" src="../images/profil.png">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)"><img src="{{Auth::user()->photo_profile}}"
                                                class="thumb-lg img-circle" alt="img"></a>
                                        <h4 class="text-white mt-2">{{Auth::user()->nom }} {{Auth::user()->prenom}}</h4>
                                        <h5 class="text-white mt-2">{{Auth::user()->email}} </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="user-btm-box mt-5 d-md-flex">
                                <div class="col-md-12 col-sm-4 text-center">
                                    <h3>Numero d'identification</h4>
                                    <h1>{{Auth::user()->id}}</h1>
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
                                        <label class="col-md-12 p-0">Nom</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->nom}}</b></p>
                                         </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Prenom</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->prenom}}</b></p>
                                         </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Date de naissance</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->date_naissance}}</b></p>
                                         </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Sexe</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->sexe}}</b></p>
                                         </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Email</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->email}}</b></p>
                                         </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Domaine de formation</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->domaine_expertise}}</b></p>
                                         </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Niveau de formation</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->niveau_formation}}</b></p>
                                         </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Annees d'experience</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->annee_experience}}</b></p>
                                         </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Pays</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->pays}}</b></p>
                                         </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Ville</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->ville}}</b></p>
                                         </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Quartier</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->quartier}}</b></p>
                                         </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Breve description de votre personnalite</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->resume}}</b></p>
                                         </div>
                                    </div>
                                      
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
@endif

@if(Auth::user()->role == 'prestataire')
    
<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                
                    @if($message = Session::get('success'))
                        <div class="alert alert-info alert-block">
                            
                            <strong>{{$message}}</strong>
                            <i class="fa-sharp fa-solid fa-circle-check"></i>
                        </div>

                    @endif
                  
                    
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-12">
                        <div class="white-box">
                            <div class="user-bg"> <img width="100%" alt="user" src="../images/profil.png">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)"><img src="{{Auth::user()->photo_profile}}"
                                                class="thumb-lg img-circle" alt="img"></a>
                                        <h4 class="text-white mt-2">{{Auth::user()->nom }}</h4>
                                        <h5 class="text-white mt-2">{{Auth::user()->email}} </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="user-btm-box mt-5 d-md-flex">
                                <div class="col-md-12 col-sm-4 text-center">
                                    <h3>Numero d'identification</h4>
                                    <h1>{{Auth::user()->id}}</h1>
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
                                        <label class="col-md-12 p-0">Noms et prenoms du representant legal</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->nom}}</b></p>
                                         </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Noms et prenoms du representant juridique</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->prenom}}</b></p>
                                         </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Email</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->email}}</b></p>
                                         </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Domaine d'intervention</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->domaine_expertise}}</b></p>
                                         </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Annees d'experiences</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->annee_experience}}</b></p>
                                         </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">References</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->references}}</b></p>
                                         </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Pays</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->pays}}</b></p>
                                         </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Ville</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->ville}}</b></p>
                                         </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Annees d'experiences</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->annee_experience}}</b></p>
                                         </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Effectif de l'equipe d'intervention</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->effectif_equipe}}</b></p>
                                         </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Breve descriptions des services proposes</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->resume}}</b></p>
                                         </div>
                                    </div>
                                    
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
@endif

@if(Auth::user()->role == 'entreprise')
    
<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                @if($message = Session::get('success'))
                        <div class="alert alert-info alert-block">
                            
                            <strong>{{$message}}</strong>
                            <i class="fa-sharp fa-solid fa-circle-check"></i>
                        </div>

                    @endif
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-12">
                        <div class="white-box">
                            <div class="user-bg"> <img width="100%" alt="user" src="../images/profil.png">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)"><img src="{{Auth::user()->photo_profile}}"
                                                class="thumb-lg img-circle" alt="img"></a>
                                        <h4 class="text-white mt-2">{{Auth::user()->nom }}</h4>
                                        <h5 class="text-white mt-2">{{Auth::user()->email}} </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="user-btm-box mt-5 d-md-flex">
                                <div class="col-md-12 col-sm-4 text-center">
                                    <h3>Numero d'identification</h4>
                                    <h1>{{Auth::user()->id}}</h1>
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
                                        <p><b>{{Auth::user()->nom_entreprise}}</b></p>
                                     </div>
                                    </div>
            
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Noms et prenoms du representant legal</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->nom}}</b></p>
                                         </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Noms et prenoms du representant juridique</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->prenom}}</b></p>
                                         </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Email</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->email}}</b></p>
                                         </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Numero de telephone</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->phone}}</b></p>
                                         </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Domaine d'action</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->domaine_expertise}}</b></p>
                                         </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Forme juridique de l'entreprise</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->type_entreprise}}</b></p>
                                         </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Annees d'existence</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->annee_experience}}</b></p>
                                         </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">References</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->references}}</b></p>
                                         </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Pays</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->pays}}</b></p>
                                         </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Ville</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->ville}}</b></p>
                                         </div>
                                    </div>
                                    
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Breve description de l'entreprise</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->resume}}</b></p>
                                         </div>
                                    </div>
                                    
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
@endif

@if(Auth::user()->role == 'entrepreneur')
    
<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                @if($message = Session::get('success'))
                        <div class="alert alert-info alert-block">
                            
                            <strong>{{$message}}</strong>
                            <i class="fa-sharp fa-solid fa-circle-check"></i>
                        </div>

                    @endif
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-12">
                        <div class="white-box">
                            <div class="user-bg"> <img width="100%" alt="user" src="../images/profil.png">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)"><img src="{{Auth::user()->photo_profile}}"
                                                class="thumb-lg img-circle" alt="img"></a>
                                        <h4 class="text-white mt-2">{{Auth::user()->nom }}</h4>
                                        <h5 class="text-white mt-2">{{Auth::user()->email}} </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="user-btm-box mt-5 d-md-flex">
                                <div class="col-md-12 col-sm-4 text-center">
                                    <h3>Numero d'identification</h4>
                                    <h1>{{Auth::user()->id}}</h1>
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
                                    <label class="col-md-12 p-0">Nom du promoteur</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <p><b>{{Auth::user()->nom}}</b></p>
                                     </div>
                                    </div>
            
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Email</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->email}}</b></p>
                                         </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Numero de telephone</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->phone}}</b></p>
                                         </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Activite principale</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->activite_principale}}</b></p>
                                         </div>
                                    </div>
                                    
                                
                                    
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Pays</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->pays}}</b></p>
                                         </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Ville</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->ville}}</b></p>
                                         </div>
                                    </div>
                                    
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Breve description de votre personnalite</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <p><b>{{Auth::user()->resume}}</b></p>
                                         </div>
                                    </div>
                                    
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
@endif


@endsection

