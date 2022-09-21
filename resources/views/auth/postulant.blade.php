@extends('layouts.registerLayout')
@section('register')
die();
<x-guest-layout>
    <x-auth-card>
        

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="/postulant">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label" for="nom">Nom</label>
                        <input type="text" class="form-control" name="nom" id="nom" placeholder="nom de l'entreprise" required>
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
                    <label class="label" for="sexe">Sexe</label>

                            <select class="form-control" name="sexe">
                                 <option>Homme</option>
                                 <option>Femme</option>
                            </select>
            
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
                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="phone" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label" for="domaine_expertise">Domaine d'expertise</label>
                        <input type="text" class="form-control" name="domaine_expertise" id="domaine_expertise" placeholder="domaine_expertise" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label" for="domaine_expertise">CV</label>
                        <input type="file" class="form-control" name="cv" id="cv" placeholder="cv" accept=".pdf" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="label" for="niveau_formation">Niveau de formation</label>

                            <select class="form-control" name="niveau_formation" required>
                                 <option>AUCUN DIPLOME</option>
                                 <option>BREVET</option>
                                 <option>PROBATOIRE</option>
                                 <option>BACCALAUREAT</option>
                                 <option>BAC +1 ou equivalent</option>
                                 <option>BAC +2 ou equivalent</option>
                                 <option>BAC +3 ou equivalent</option>
                                 <option>BAC +4 ou equivalent</option>
                                 <option>BAC +5 ou equivalent</option>
                                 <option>BAC +6 ou equivalent</option>
                                 <option>BAC +7 ou equivalent</option>

                            </select>
            
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label" for="domaine_expertise">Annee(s) d'experience(s)</label>
                        <input type="number" class="form-control" name="annee_experience" id="cv" placeholder="annee_experience" required>
                    </div>
                </div>
                <div class="col-md-6"> 
                    <div class="form-group">
                        <label class="pays" for="phone">Pays</label>
                        <input type="country" class="form-control" name="pays" id="pays" placeholder="pays" required>
                    </div>
                </div>
                <div class="col-md-6"> 
                    <div class="form-group">
                        <label class="ville" for="phone">Ville</label>
                        <input type="text" class="form-control" name="ville" id="ville" placeholder="ville" required>
                    </div>
                </div>
                <div class="col-md-6"> 
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