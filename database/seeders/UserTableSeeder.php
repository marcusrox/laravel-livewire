<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $u = User::create([
            'name' => 'Marcus Moreira de Souza',
            'email' => 'marcus@idevs.net',
            'password' => bcrypt('12345678')
        ]);
        //$u->assignRole("Administrador");

        $u = User::create([
            'name' => 'Lucas Vendedor da Silva',
            'email' => 'lucas@idevs.net',
            'password' => bcrypt('12345678')
        ]);
        //$u->assignRole("Vendedor");

        $u = User::create([
            'name' => 'Mário Comprador da Silva',
            'email' => 'mario@idevs.net',
            'password' => bcrypt('12345678')
        ]);
        //$u->assignRole("Comprador");

        // Popular com dados fakes
        //factory(User::class, 30)->create();
    }
}
