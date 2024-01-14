<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('filiere')->insert([
            'nom' => 'Technologie de Multimédia et du Web',
            'cycle' => 'Licence',
            'annee' => '2023/2024',
        ]);
        DB::table('filiere')->insert([
            'nom' => 'CLE INFORMATIQUE',
            'cycle' => 'Licence',
            'annee' => '2023/2024',
        ]);
        DB::table('filiere')->insert([
            'nom' => 'ANGLAIS',
            'cycle' => 'MASTER',
            'annee' => '2023/2024',
        ]);



        DB::table('module')->insert([
            'nom' => 'Programation Web',
            'massHoraire' => 40,
            'idFiliere' =>1,
        ]);
        DB::table('module')->insert([
            'nom' => 'Bases de données',
            'massHoraire' => 60,
            'idFiliere' =>1,
        ]);
        DB::table('module')->insert([
            'nom' => 'Structure de données',
            'massHoraire' => 40,
            'idFiliere' =>1,
        ]);
        DB::table('module')->insert([
            'nom' => 'Technologie de Mutimédia',
            'massHoraire' => 40,
            'idFiliere' =>1,
        ]);
        DB::table('module')->insert([
            'nom' => 'Psychopédagogie',
            'massHoraire' => 70,
            'idFiliere' =>1,
        ]);
        DB::table('module')->insert([
            'nom' => 'Didactisue spécial',
            'massHoraire' => 40,
            'idFiliere' =>1,
        ]);
        DB::table('module')->insert([
            'nom' => 'Programmation Orientée Objets ',
            'massHoraire' => 90,
            'idFiliere' =>1,
        ]);
        DB::table('module')->insert([
            'nom' => 'Applications Pédagogiques des Technologie de l’Information et de Communication',
            'massHoraire' => 40,
            'idFiliere' =>1,
        ]);
        DB::table('module')->insert([
            'nom' => 'Réseaux Informatiques et Maintenance ',
            'massHoraire' => 70,
            'idFiliere' =>1,
        ]);
        DB::table('module')->insert([
            'nom' => 'Stage Professionnel',
            'massHoraire' => 80,
            'idFiliere' =>1,
        ]);


        DB::table('professeur')->insert([
            'nom' => "Rahmouni",
            'prenom' => "Mohamed",
            'email' =>"rahmouniMed@gmail.com" ,
            'adresse' =>"adresse de rahmouni",
            'num_telephone' => '099676578',
            'image' => "image.png",
        ]);
        DB::table('professeur')->insert([
            'nom' => "Barkia",
            'prenom' => "Hassan",
            'email' =>"barkia@gmail.com" ,
            'adresse' =>"adresse de barkia",
            'num_telephone' => '099676578',
            'image' => "image.png",
        ]);
        DB::table('professeur')->insert([
            'nom' => "Mounadi",
            'prenom' => "Ali",
            'email' =>"Mounadi@gmail.com" ,
            'adresse' =>"adresse de mounadi",
            'num_telephone' => '099676578',
            'image' => "image.png",
        ]);
        DB::table('professeur')->insert([
            'nom' => "Ghasoub",
            'prenom' => "idk hh",
            'email' =>"Ghassoub@gmail.com" ,
            'adresse' =>"adresse de ghassoub",
            'num_telephone' => '099676578',
            'image' => "image.png",
        ]);
        DB::table('professeur')->insert([
            'nom' => "Kharoubi",
            'prenom' => "Fouad",
            'email' =>"Kharroubi@gmail.com" ,
            'adresse' =>"adresse de kharoubi",
            'num_telephone' => '099676578',
            'image' => "image.png",
        ]);
        DB::table('professeur')->insert([
            'nom' => "Mahmoudi",
            'prenom' => "abdelhak",
            'email' =>"mahmoudi@gmail.com" ,
            'adresse' =>"adresse de mahmoudi",
            'num_telephone' => '099676578',
            'image' => "image.png",
        ]);


    }
}
