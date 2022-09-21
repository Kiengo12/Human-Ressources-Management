@extends('layouts.registerLayout')
@section('register')
<x-guest-layout>
    <x-auth-card>
        

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="/entrepreneur" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label" for="nom">Nom du promoteur</label>
                        <input type="text" class="form-control" name="nom" id="nom" placeholder="nom" required>
                    </div>
                </div>
               
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label" for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="email" required>
                    </div>
                </div>
               
                <div class="col-md-6"> 
                    <div class="form-group">
                        <label class="label" for="phone">Numero de telephone</label>
                        <input type="phone" class="form-control" name="phone" id="phone" placeholder="phone" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label" for="activite_principale">Activite principale</label>
                        <input type="text" class="form-control" name="activite_principale" id="activite_principale" placeholder="Activite principale" required>
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
                        <label class="label" for="resume">Breve description de votre personnalite</label>
                        <textarea name="resume" class="form-control" id="message" cols="30" rows="4" placeholder="resume de votre personnalite" required></textarea>
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
    </x-auth-card>
</x-guest-layout>
@endsection