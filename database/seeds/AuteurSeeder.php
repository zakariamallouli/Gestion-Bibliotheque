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
                'nom' => 'zakaria',
                'prenom' => 'mallouli',
                'nationalite' => 'France',
                'biographie' => Str::random(70),
            ],[
                'nom' => 'marouane',
                'prenom' => 'ettaki',
                'nationalite' => 'Maroc',
                'biographie' => Str::random(70),
            ],[
                'nom' => 'anass',
                'prenom' => 'soukant',
                'nationalite' => 'Belgique',
                'biographie' => Str::random(70),
            ],[
                'nom' => 'wail',
                'prenom' => 'naceur',
                'nationalite' => 'Maroc',
                'biographie' => Str::random(70),
            ],[
                'nom' => 'hamza',
                'prenom' => 'mallouli',
                'nationalite' => 'France',
                'biographie' => Str::random(70),
            ],[
                'nom' => 'yahya',
                'prenom' => 'ettaki',
                'nationalite' => 'Egypt',
                'biographie' => Str::random(70),
            ],[
                'nom' => 'wassim',
                'prenom' => 'najeh',
                'nationalite' => 'France',
                'biographie' => Str::random(70),
            ],[
                'nom' => 'abdo',
                'prenom' => 'track',
                'nationalite' => 'Algerie',
                'biographie' => Str::random(70),
            ]
        ]);
    }
}
