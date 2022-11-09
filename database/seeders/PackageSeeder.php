<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Package::insert(
            [
                'name' => 'bronze',
                'price' => 10000,
                'ticket_slots' => 300,
                'discount' => '',
            ],
            [
                'name' => 'silver',
                'price' => 15000,
                'ticket_slots' => 800,
                'discount' => '',
            ],
            [
                'name' => 'gold',
                'price' => 25000,
                'ticket_slots' => 1500,
                'discount' => '',
            ],
            [
                'name' => 'platinum',
                'price' => 35000,
                'ticket_slots' => 3000,
                'discount' => '',
            ]
        );
    }
}
