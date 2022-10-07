<?php

namespace Database\Seeders;

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
        //con esta forma no empleamos el factory
        // \App\Models\User::factory(1)->create();
        //con esta forma si empleamos el factory
        $this->call(UsuarioSeeder::class);
    }
}
