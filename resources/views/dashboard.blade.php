@extends('layouts.DashboardLayout')
@section('contenuDashboard')
@if(Auth::user()->role == 'admin')       
        <!-- ============================================================== -->
                <!-- PRODUCTS YEARLY SALES -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Statistiques</h3>
                            <div class="d-md-flex">
                                <ul class="list-inline d-flex ms-auto">
                                    <li class="ps-3">
                                        <h5><i class="fa fa-circle me-1 text-info"></i>Mac</h5>
                                    </li>
                                    <li class="ps-3">
                                        <h5><i class="fa fa-circle me-1 text-inverse"></i>Windows</h5>
                                    </li>
                                </ul>
                            </div>
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
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="d-md-flex mb-3">
                                <h3 class="box-title mb-0">Recent sales</h3>
                                <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                                    <select class="form-select shadow-none row border-top">
                                        <option>March 2021</option>
                                        <option>April 2021</option>
                                        <option>May 2021</option>
                                        <option>June 2021</option>
                                        <option>July 2021</option>
                                    </select>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Name</th>
                                            <th class="border-top-0">Status</th>
                                            <th class="border-top-0">Date</th>
                                            <th class="border-top-0">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="txt-oflo">Elite admin</td>
                                            <td>SALE</td>
                                            <td class="txt-oflo">April 18, 2021</td>
                                            <td><span class="text-success">$24</span></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td class="txt-oflo">Real Homes WP Theme</td>
                                            <td>EXTENDED</td>
                                            <td class="txt-oflo">April 19, 2021</td>
                                            <td><span class="text-info">$1250</span></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td class="txt-oflo">Ample Admin</td>
                                            <td>EXTENDED</td>
                                            <td class="txt-oflo">April 19, 2021</td>
                                            <td><span class="text-info">$1250</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td class="txt-oflo">Medical Pro WP Theme</td>
                                            <td>TAX</td>
                                            <td class="txt-oflo">April 20, 2021</td>
                                            <td><span class="text-danger">-$24</span></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td class="txt-oflo">Hosting press html</td>
                                            <td>SALE</td>
                                            <td class="txt-oflo">April 21, 2021</td>
                                            <td><span class="text-success">$24</span></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td class="txt-oflo">Digital Agency PSD</td>
                                            <td>SALE</td>
                                            <td class="txt-oflo">April 23, 2021</td>
                                            <td><span class="text-danger">-$14</span></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td class="txt-oflo">Helping Hands WP Theme</td>
                                            <td>MEMBER</td>
                                            <td class="txt-oflo">April 22, 2021</td>
                                            <td><span class="text-success">$64</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Recent Comments -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- .col -->
                    <div class="col-md-12 col-lg-8 col-sm-12">
                        <div class="card white-box p-0">
                            <div class="card-body">
                                <h3 class="box-title mb-0"></h3>
                            </div>
                            <div class="comment-widgets">
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row p-3 mt-0">
                                    <div class="p-2"><img src="plugins/images/users/varun.jpg" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="comment-text ps-2 ps-md-3 w-100">
                                        <h5 class="font-medium">James Anderson</h5>
                                        <span class="mb-3 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry.It has survived not only five centuries. </span>
                                        <div class="comment-footer d-md-flex align-items-center">
                                             <span class="badge bg-primary rounded">Pending</span>
                                             
                                            <div class="text-muted fs-2 ms-auto mt-2 mt-md-0">April 14, 2021</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row p-3">
                                    <div class="p-2"><img src="plugins/images/users/genu.jpg" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="comment-text ps-2 ps-md-3 active w-100">
                                        <h5 class="font-medium">Michael Jorden</h5>
                                        <span class="mb-3 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry.It has survived not only five centuries. </span>
                                        <div class="comment-footer d-md-flex align-items-center">

                                            <span class="badge bg-success rounded">Approved</span>
                                            
                                            <div class="text-muted fs-2 ms-auto mt-2 mt-md-0">April 14, 2021</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row p-3">
                                    <div class="p-2"><img src="plugins/images/users/ritesh.jpg" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="comment-text ps-2 ps-md-3 w-100">
                                        <h5 class="font-medium">Johnathan Doeting</h5>
                                        <span class="mb-3 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry.It has survived not only five centuries. </span>
                                        <div class="comment-footer d-md-flex align-items-center">

                                            <span class="badge rounded bg-danger">Rejected</span>
                                            
                                            <div class="text-muted fs-2 ms-auto mt-2 mt-md-0">April 14, 2021</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="card white-box p-0">
                            <div class="card-heading">
                                <h3 class="box-title mb-0">Chat Listing</h3>
                            </div>
                            <div class="card-body">
                                <ul class="chatonline">
                                    <li>
                                        <div class="call-chat">
                                            <button class="btn btn-success text-white btn-circle btn" type="button">
                                                <i class="fas fa-phone"></i>
                                            </button>
                                            <button class="btn btn-info btn-circle btn" type="button">
                                                <i class="far fa-comments text-white"></i>
                                            </button>
                                        </div>
                                        <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                                src="plugins/images/users/varun.jpg" alt="user-img" class="img-circle">
                                            <div class="ms-2">
                                                <span class="text-dark">Varun Dhavan <small
                                                        class="d-block text-success d-block">online</small></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="call-chat">
                                            <button class="btn btn-success text-white btn-circle btn" type="button">
                                                <i class="fas fa-phone"></i>
                                            </button>
                                            <button class="btn btn-info btn-circle btn" type="button">
                                                <i class="far fa-comments text-white"></i>
                                            </button>
                                        </div>
                                        <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                                src="plugins/images/users/genu.jpg" alt="user-img" class="img-circle">
                                            <div class="ms-2">
                                                <span class="text-dark">Genelia
                                                    Deshmukh <small class="d-block text-warning">Away</small></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="call-chat">
                                            <button class="btn btn-success text-white btn-circle btn" type="button">
                                                <i class="fas fa-phone"></i>
                                            </button>
                                            <button class="btn btn-info btn-circle btn" type="button">
                                                <i class="far fa-comments text-white"></i>
                                            </button>
                                        </div>
                                        <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                                src="plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle">
                                            <div class="ms-2">
                                                <span class="text-dark">Ritesh
                                                    Deshmukh <small class="d-block text-danger">Busy</small></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="call-chat">
                                            <button class="btn btn-success text-white btn-circle btn" type="button">
                                                <i class="fas fa-phone"></i>
                                            </button>
                                            <button class="btn btn-info btn-circle btn" type="button">
                                                <i class="far fa-comments text-white"></i>
                                            </button>
                                        </div>
                                        <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                                src="plugins/images/users/arijit.jpg" alt="user-img" class="img-circle">
                                            <div class="ms-2">
                                                <span class="text-dark">Arijit
                                                    Sinh <small class="d-block text-muted">Offline</small></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="call-chat">
                                            <button class="btn btn-success text-white btn-circle btn" type="button">
                                                <i class="fas fa-phone"></i>
                                            </button>
                                            <button class="btn btn-info btn-circle btn" type="button">
                                                <i class="far fa-comments text-white"></i>
                                            </button>
                                        </div>
                                        <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                                src="plugins/images/users/govinda.jpg" alt="user-img"
                                                class="img-circle">
                                            <div class="ms-2">
                                                <span class="text-dark">Govinda
                                                    Star <small class="d-block text-success">online</small></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="call-chat">
                                            <button class="btn btn-success text-white btn-circle btn" type="button">
                                                <i class="fas fa-phone"></i>
                                            </button>
                                            <button class="btn btn-info btn-circle btn" type="button">
                                                <i class="far fa-comments text-white"></i>
                                            </button>
                                        </div>
                                        <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                                src="plugins/images/users/hritik.jpg" alt="user-img" class="img-circle">
                                            <div class="ms-2">
                                                <span class="text-dark">John
                                                    Abraham<small class="d-block text-success">online</small></span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
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
                                    <form class="form-horizontal form-material" method="POST" action="/cv">
                                        @csrf
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Password</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="file" value="password" class="form-control p-0 border-0">
                                        </div>
                                    </div>
                                    <button type="submit">envoyer</button>
                                    </form>    
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

