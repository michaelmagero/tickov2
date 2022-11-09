<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::insert([
            'name' => 'super-admin',
            'lastname' => 'admin',
            'username' => 'sadmin',
            'email' => 'sadmin@ticko.co.ke',
            'password' => bcrypt('mowimishaP@$$w0rd'),
            'company' => 'Ticko',
            'phone' => '0711223344',
            'role' => 'super-admin', //admin,buyer,vendor
        ]);

        User::factory()->count(20)->create();
    }
}
