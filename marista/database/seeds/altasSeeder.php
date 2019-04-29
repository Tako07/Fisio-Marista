<?php

use Illuminate\Database\Seeder;
use App\Models\alta;

class altasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alta= new alta();
        $alta->id_diagnostico='1';
        $alta->fisioterapeuta='3';
        $alta->pasante='4';
        $alta->save();
    }
}
