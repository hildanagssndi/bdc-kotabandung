<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kelola_data_ksm;

class KsmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Kelola_data_ksm::create([
            'id' => 3,
            'brand_name' => 'Kripik Jaya',
            'owner' => 'Sholeh',
            'no_wa' => '08123456789',
            'category_id' => '1',
            'cluster' => 'B',
            'address' => 'Jl. Fatahillah No.90',
        ]);
        Kelola_data_ksm::create([
            'id' => 4,
            'brand_name' => 'Kripik Buaya',
            'owner' => 'Nugi',
            'no_wa' => '0812345123',
            'category_id' => '1',
            'address' => 'Jl. Fatahillah No.103',
        ]);
    }
}
