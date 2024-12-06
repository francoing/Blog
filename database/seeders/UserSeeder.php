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
        User::create([
            'name'=>'Franco Montti',
            'email'=>'franco.montti@gmail.com',
            'password'=>bcrypt('12345678')
        ])->assignRole('Admin');
        User::factory(10)->create();

    }
}
