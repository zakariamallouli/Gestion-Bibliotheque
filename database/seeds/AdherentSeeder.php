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
        DB::table('users')->insert([
            [
                'name' => Str::random(5).' '.Str::random(4),
                'email' => Str::random(6).'@gmail.com',
                'cin' => 'EE45894',
                'adresse' => Str::random(12),
                'tel' => '0612457896',
                'password' =>  Hash::make('password'),
            ],[
                'name' => Str::random(5).' '.Str::random(4),
                'email' => Str::random(6).'@gmail.com',
                'cin' => 'AG56987',
                'adresse' => Str::random(12),
                'tel' => '0612741296',
                'password' =>  Hash::make('password'),
            ],[
                'name' => Str::random(5).' '.Str::random(4),
                'email' => Str::random(6).'@gmail.com',
                'cin' => 'KL78954',
                'adresse' => Str::random(12),
                'tel' => '0632145879',
                'password' =>  Hash::make('password'),
            ]
        ]);
    }
}
