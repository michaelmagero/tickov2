<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->insert([
            [
                'name' => 'bronze',
                'price' => 10000,
                'ticket_slots' => 300,
                'discount' => null,
            ],
            [
                'name' => 'silver',
                'price' => 15000,
                'ticket_slots' => 800,
                'discount' => null,
            ],
            [
                'name' => 'gold',
                'price' => 25000,
                'ticket_slots' => 1500,
                'discount' => null,
            ],
            [
                'name' => 'platinum',
                'price' => 35000,
                'ticket_slots' => 3000,
                'discount' => null
            ]
        ]);
    }
}
