<?php

namespace App\Http\Controllers\Auth;

use App\Models\CV;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Storage;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.postulant');
    }
    public function create1()
    {
        return view('auth.prestataire');
    }
    public function create2()
    {
        return view('auth.entreprise');
    }
    public function create3()
    {
        return view('auth.entrepreneur');
    }

    public function entreprise(){
        return view('adminMenu.entrepriseMenu');
    }
    

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'sexe' =>$request->sexe,
            'phone' => $request->phone,
            'date_naissance' => $request->date_naissance,
            'domaine_expertise' => $request->domaine_expertise,
            'niveau_formation' => $request->niveau_formation,
            'pays' => $request->pays,
            'ville' => $request->ville,
            'quartier' => $request->quartier,
            'resume' => $request->resume,
            'role' => 'postulant',
            'annee_experience' => $request->annee_experience,
            'activite_principale' => 'null',
            'description_entreprise' => 'null',
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);
        
        return redirect("/dashboard");
    }


    public function store1(Request $request)
    {
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'phone' => $request->phone,
            'domaine_expertise' =>$request->domaine_expertise,
            'pays' =>$request->pays,
            'annee_experience'=> $request->annee_experience,
            'references' => $request->references,

            'ville' => $request->ville,
            'quartier' => $request->quartier,
            'resume' => $request->resume,
            'role' => 'prestataire',
            'activite_principale' => 'null',
            'description_entreprise' => 'null',
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);
       
        return redirect("/dashboard");
    }


    public function store2(Request $request)
    {
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
       
        $user = User::create([
            'nom' => $request->nom,
            'nom_entreprise' => $request->nom_entreprise,
            'type_entreprise' => $request->type_entreprise,

            'prenom' => $request->prenom,
            'email' => $request->email,
            'phone' => $request->phone,
            'annee_experience'  => $request->annee_experience,
            'domaine_expertise' =>$request->domaine_expertise,
            'pays' =>$request->pays,
            'ville' => $request->ville,
            'quartier' => $request->quartier,
            'resume' => $request->resume,
            'role' => 'entreprise',
            'activite_principale' => 'null',
            'description_entreprise' => 'null',
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);   
        return redirect("/dashboard");
    }

    public function store3(Request $request)
    {
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
       
        $user = User::create([
            'nom' => $request->nom,
            'email' => $request->email,
            'phone' => $request->phone,
            'date_naissance' => $request->date_naissance,
            'domaine_expertise' =>'null',
            'pays' =>$request->pays,
            'ville' => $request->ville,
            'quartier' => $request->quartier,
            'resume' => $request->resume,
            'role' => 'entrepreneur',
            'activite_principale' => $request->activite_principale,
            'description_entreprise' => 'null',
            'password' => Hash::make($request->password),
        ]);

       

        event(new Registered($user));

        Auth::login($user);   
        return redirect("/dashboard");
    }
}
