<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(AuteurSeeder::class);
        $this->call(AdherentSeeder::class);
        $this->call(GenreSeeder::class);
        $this->call(RoleSeeder::class);
    }
}
