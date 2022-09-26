@extends('layouts.DashboardLayout')
@section('search')

<div class="row">
                    <!-- .col -->
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="card white-box p-0">
                           
                                @if(count($recherche) ==0)
                                 <div class="card-body">
                                    <h3 class="box-title mb-0">Aucun resultat  pour "{{$search}}"</h3>
                                </div>
                                 @endif 
                            
                               
                            
                                @if(count($recherche)!==0) 
                                    <div class="card-body">
                                        <h3 class="box-title mb-0">Recherche pour "{{$search}}"</h3>
                                    </div>
                                @endif
                           
                        
                            @foreach($recherche as $recherches)
                            <div class="comment-widgets">
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row p-3 mt-0">
                                    <div class="p-2"><img src="{{$recherches->photo_profile}}" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="comment-text ps-2 ps-md-3 w-100">
                                        <h5 class="font-medium">{{$recherches->nom}}</h5>
                                        <span class="mb-3 d-block">{{$recherches->resume}}</span>
                                        <div class="comment-footer d-md-flex align-items-center">
                                        <a href="{{route('recherche.show',$recherches->id)}}" class="btn btn-info ml-2"><i class="fa fa-solid fa-eye "></i></a>
                                             
                                             
                                            <div class="text-muted fs-2 ms-auto mt-2 mt-md-0">{{$recherches->date_naissance}}</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                
                        
                            </div>
                            @endforeach

                        </div>
                    </div>

@endsection