<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdherentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('adherents')->insert([
            [
                'nom' => Str::random(10),
                'prenom' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'cin' => 'EE45894',
                'adresse' => Str::random(20),
                'tel' => '0612457896',
            ],[
                'nom' => Str::random(10),
                'prenom' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'cin' => 'AG56987',
                'adresse' => Str::random(20),
                'tel' => '0612741296',
            ],[
                'nom' => Str::random(10),
                'prenom' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'cin' => 'KL78954',
                'adresse' => Str::random(20),
                'tel' => '0632145879',
            ],[
                'nom' => Str::random(10),
                'prenom' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'cin' => 'BA14256',
                'adresse' => Str::random(20),
                'tel' => '0723457874',
            ],[
                'nom' => Str::random(10),
                'prenom' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'cin' => 'AR78494',
                'adresse' => Str::random(20),
                'tel' => '0714988996',
            ],[
                'nom' => Str::random(10),
                'prenom' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'cin' => 'BR63254',
                'adresse' => Str::random(20),
                'tel' => '0759865896',
            ],[
                'nom' => Str::random(10),
                'prenom' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'cin' => 'EA98745',
                'adresse' => Str::random(20),
                'tel' => '0754873205',
            ]
        ]);
    }
}
