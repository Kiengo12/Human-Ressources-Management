@extends('layouts.registerLayout')
@section('register')
<x-guest-layout>
    <x-auth-card>
        

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('postulant') }}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label" for="nom">Nom</label>
                        <input type="text" class="form-control" name="nom" id="nom" placeholder="nom" required>
                    </div>
                </div>
                <div class="col-md-6"> 
                    <div class="form-group">
                        <label class="label" for="prenom">Prenom</label>
                        <input type="text" class="form-control" name="prenom" id="prenom" placeholder="prenom" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="label" for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="email" required>
                    </div>
                </div>
               
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label" for="date_naissance">Date de naissance</label>
                        <input type="date" class="form-control" name="date_naissance" id="date_naissance" placeholder="Date de naissance" required>
                    </div>
                </div>
                <div class="col-md-6"> 
                    <div class="form-group">
                        <label class="label" for="phone">Numero de telephone</label>
                        <input type="phone" class="form-control" name="phone" id="phone" placeholder="phone" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="label" for="domaine_expertise">Domaine d'expertise</label>
                        <input type="text" class="form-control" name="domaine_expertise" id="domaine_expertise" placeholder="domaine_expertise" required>
                    </div>
                </div>
                <div class="col-md-4"> 
                    <div class="form-group">
                        <label class="pays" for="phone">Pays</label>
                        <input type="country" class="form-control" name="pays" id="pays" placeholder="pays" required>
                    </div>
                </div>
                <div class="col-md-4"> 
                    <div class="form-group">
                        <label class="ville" for="phone">Ville</label>
                        <input type="text" class="form-control" name="ville" id="ville" placeholder="ville" required>
                    </div>
                </div>
                <div class="col-md-4"> 
                    <div class="form-group">
                        <label class="quartier" for="phone">Quartier</label>
                        <input type="text" class="form-control" name="quartier" id="quartier" placeholder="quartier" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="label" for="password">Mot de passe</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="label" for="password_confirmation">Confirmez le mot de passe</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="confirmez le mot de passe" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="label" for="resume">Resume de votre personnalite</label>
                        <textarea name="resume" class="form-control" id="message" cols="30" rows="4" placeholder="resume de votre personnalite" requireds></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="submit" value="S'enregister" class="btn btn-info">
                        <div class="submitting"></div>
                    </div>
                </div>
            </div>
           
        </form>
        <p>deja inscrit?Veuillez vous <a href="{{route('login')}}">Connecter</a></p>
    </x-auth-card>
</x-guest-layout>
@endsection