<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->
            create([
                'first_name' => 'Ahmed',
                'last_name' => 'AlMoselhy',
                'email' => 'ahmedalmoselhy.slm@gmail.com',
                'password' => bcrypt('masterP@ssw0rd'),
                'type' => 'admin',
                'email_verified_at' => now(),
            ]);
    }
}
