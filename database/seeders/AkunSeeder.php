<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'manajer',
                'name' => 'ManajerKu',
                'email' => 'manajer@example.com',
                'level' => 'manajer',
                'password' => bcrypt('manajer123')
            ],
            [
                'username' => 'cs',
                'name' => 'Budiman',
                'email' => 'cs@example.com',
                'level' => 'cs',
                'password' => bcrypt('cs123')
            ]
            ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
