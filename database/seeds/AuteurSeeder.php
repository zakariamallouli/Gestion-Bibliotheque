<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AuteurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('auteurs')->insert([
            [
                'nom' => Str::random(10),
                'prenom' => Str::random(10),
                'nationalite' => 'France',
                'biographie' => Str::random(70),
            ],[
                'nom' => Str::random(10),
                'prenom' => Str::random(10),
                'nationalite' => 'Maroc',
                'biographie' => Str::random(70),
            ],[
                'nom' => Str::random(10),
                'prenom' => Str::random(10),
                'nationalite' => 'Belgique',
                'biographie' => Str::random(70),
            ],[
                'nom' => Str::random(10),
                'prenom' => Str::random(10),
                'nationalite' => 'Maroc',
                'biographie' => Str::random(70),
            ],[
                'nom' => Str::random(10),
                'prenom' => Str::random(10),
                'nationalite' => 'France',
                'biographie' => Str::random(70),
            ],[
                'nom' => Str::random(10),
                'prenom' => Str::random(10),
                'nationalite' => 'Egypt',
                'biographie' => Str::random(70),
            ],[
                'nom' => Str::random(10),
                'prenom' => Str::random(10),
                'nationalite' => 'France',
                'biographie' => Str::random(70),
            ],[
                'nom' => Str::random(10),
                'prenom' => Str::random(10),
                'nationalite' => 'Algerie',
                'biographie' => Str::random(70),
            ],[
                'nom' => Str::random(10),
                'prenom' => Str::random(10),
                'nationalite' => 'Maroc',
                'biographie' => Str::random(70),
            ],[
                'nom' => Str::random(10),
                'prenom' => Str::random(10),
                'nationalite' => 'Egypt',
                'biographie' => Str::random(70),
            ]
        ]);
    }
}
