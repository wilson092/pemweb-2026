<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ortu;

class OrtuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Ortu::firstOrCreate([
            'name' => 'Jane Doe',
            'email' => 'jane.doe@example.com',
            'phone' => '1234567890',
        ]);
    }
}
