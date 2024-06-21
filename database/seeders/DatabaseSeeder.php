<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\category;
use App\Models\cities;
use App\Models\Stokbarang;
use App\Models\Kelola_data_ksm;
use App\Models\Event;
use App\Models\Beli;
//cities
use Database\Seeders\CitySeeder;

use Database\Seeders\user\UserSeeder;
// use Database\Seeders\user\RoleSeeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        /**
         * Run the database seeds.
         */
        $seeder = [];

        if (category::count() == 0) {
            $seeder[] = CategorySeeder::class;
        }

        if (cities::count() == 0) {
            $seeder[] = CitySeeder::class;
        }

        if (User::count() == 0) {
            $seeder[] = UserSeeder::class;
        }

        if (Kelola_data_ksm::count() == 0) {
            $seeder[] = KsmSeeder::class;
        }

        if (Stokbarang::count() == 0) {
            $seeder[] = ItemSeeder::class;
        }

        if (Event::count() == 0) {
            $seeder[] = EventSeeder::class;
        }

        // if (Beli::count() == 0) {
        //     $seeder[] = BeliSeeder::class;
        // }

        $this->call($seeder);
    }
}
