<?php

use App\user;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS =0');
        user::truncate();

        User::flushEventListeners(); //desactiva todops los evetos de un modelos para que no mande mucho contenido

        $cantidadUsuarios =1000;

        factory(user::class, $cantidadUsuarios)->create();
    }
}
