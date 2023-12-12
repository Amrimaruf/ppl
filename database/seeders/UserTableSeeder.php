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
        $users = array(
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123'),
                'foto' => '/img/user.jpg',
                'level' => 1
            ],
            [
                'name' => 'Gudang',
                'email' => 'gudang@gmail.com',
                'password' => bcrypt('123'),
                'foto' => '/img/user.jpg',
                'level' => 2
            ],
            [
                'name' => 'Manajer',
                'email' => 'manajer@gmail.com',
                'password' => bcrypt('123'),
                'foto' => '/img/user.jpg',
                'level' => 3
            ]
        );

        array_map(function (array $user) {
            User::query()->updateOrCreate(
                ['email' => $user['email']],
                $user
            );
        }, $users);
    }
}
