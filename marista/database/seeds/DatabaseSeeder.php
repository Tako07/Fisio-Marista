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
        $this->call(roles_seeder::class);
        $this->call(user_seeder::class);
        $this->call(pacientesSeeder::class);
        $this->call(diagnosticosSeeder::class);
        $this->call(altasSeeder::class);
        $this->call(mapasSeeder::class);
        $this->call(notasSeeder::class);
        $this->call(historiaClinicaSeeder::class);
    }
}
