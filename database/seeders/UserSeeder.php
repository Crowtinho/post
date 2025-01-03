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
        $user = new User();

        $user->name = 'Andresito Cuervo';
        $user->email = 'crow@gmail.com';
        $user->password = bcrypt('123456789');
        $user->save();

       
       
        $user = new User();
        $user->name = 'Juan Cuervo';
        $user->email = 'crow2@gmail.com';
        $user->password = bcrypt('123456789');
        $user->save();

        User::factory(10)->create();

    }
}
