<?php

use Illuminate\Database\Seeder;
use App\Models\usuario;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario= new usuario();
        $usuario->nombres='Mario';
        $usuario->username='admin';
        $usuario->rol='1';
        $usuario->apaterno='Ruiz';
        $usuario->amaterno='Martinez';
        $usuario->email='mario@example.com';
        $usuario->fecha_nacimiento='1990-12-12';
        $usuario->calle='Morelos sur #12';
        $usuario->colonia='Robles';
        $usuario->cp='54345';
        $usuario->num_tel='4432312321';
        $usuario->num_cel='4432345432';
        $usuario->password='$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm';
        $usuario->status='1';
        $usuario->save();

        $usuario= new usuario();
        $usuario->nombres='Daniel';
        $usuario->username='medico';
        $usuario->rol='2';
        $usuario->apaterno='Ruiz';
        $usuario->amaterno='Gomez';
        $usuario->email='daniel@example.com';
        $usuario->fecha_nacimiento='1990-11-10';
        $usuario->calle='Morelos Norte #12';
        $usuario->colonia='Piña';
        $usuario->cp='54332';
        $usuario->num_tel='4432765321';
        $usuario->num_cel='4432344742';
        $usuario->status='1';
        $usuario->password='$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm';
        $usuario->save();

        $usuario= new usuario();
        $usuario->nombres='Miguel';
        $usuario->username='terapeuta';
        $usuario->rol='3';
        $usuario->apaterno='Perez';
        $usuario->amaterno='Martinez';
        $usuario->email='migue@example.com';
        $usuario->fecha_nacimiento='1990-12-12';
        $usuario->calle='Morelos sur #12';
        $usuario->colonia='Robles';
        $usuario->cp='54345';
        $usuario->num_tel='4432312321';
        $usuario->num_cel='4432345432';
        $usuario->password='$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm';
        $usuario->status='1';
        $usuario->save();

        $usuario= new usuario();
        $usuario->nombres='Ulises';
        $usuario->username='pasante';
        $usuario->rol='4';
        $usuario->apaterno='Ramirez';
        $usuario->amaterno='Martinez';
        $usuario->email='Uli@example.com';
        $usuario->fecha_nacimiento='1990-12-12';
        $usuario->calle='Morelos sur #12';
        $usuario->colonia='Robles';
        $usuario->cp='54345';
        $usuario->num_tel='4432312321';
        $usuario->num_cel='4432345432';
        $usuario->password='$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm';
        $usuario->status='1';
        $usuario->save();

        $usuario= new usuario();
        $usuario->nombres='Pedro';
        $usuario->username='practicante';
        $usuario->rol='5';
        $usuario->apaterno='Ramirez';
        $usuario->amaterno='Perez';
        $usuario->email='pedro@example.com';
        $usuario->fecha_nacimiento='1990-12-12';
        $usuario->calle='Morelos sur #12';
        $usuario->colonia='Mandarina';
        $usuario->cp='54345';
        $usuario->num_tel='4435412321';
        $usuario->num_cel='4432345432';
        $usuario->password='$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm';
        $usuario->status='1';
        $usuario->save();

        $usuario= new usuario();
        $usuario->nombres='Ximena';
        $usuario->username='servidor';
        $usuario->rol='6';
        $usuario->apaterno='Gomez';
        $usuario->amaterno='Herrera';
        $usuario->email='xime@example.com';
        $usuario->fecha_nacimiento='1983-12-12';
        $usuario->calle='Morelos norte #43';
        $usuario->colonia='Pera';
        $usuario->cp='54345';
        $usuario->num_tel='4435412321';
        $usuario->num_cel='4465345432';
        $usuario->password='$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm';
        $usuario->status='1';
        $usuario->save();

    }
}
