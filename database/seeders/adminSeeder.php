<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nom' => 'maison de',
            'prenom' => 'retour',
            'email' => 'maison2retour@mail.com',
            'password' => Hash::make('maison2retour2022'),
            'role' => 'admin',
            'phone' => 'null',
            'date_naissance' => '2022-09-14 12:56:49',
            'domaine_expertise' => 'null',
            'pays' => 'null',
            'activite_principale' => 'null',
            'ville' => 'null',
            'quartier' => 'null',
            'resume' => 'null',
            'description_entreprise' => 'null'
        ]);
    }
}
