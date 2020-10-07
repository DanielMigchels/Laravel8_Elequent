<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Jamie Doe',
                'email' => 'jamie.doe@mail.com',
                'password' => bcrypt('jamiedoe123')
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'jane.doe@mail.com',
                'password' => bcrypt('janedoe123')
            ]
        ];

        foreach ($users as $user) {
            User::create(array(
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => $user['password']
            ));
        }
    }
}
