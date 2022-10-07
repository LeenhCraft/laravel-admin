<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $user = new User();
        // $user->name = "admin";
        // $user->email = "demo@demo.com";
        // $user->password = bcrypt("demo");
        // $user->save();
        User::factory(10)->create();
    }
}
