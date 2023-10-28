<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use App\Models\category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(1)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // category::create([
        //     'category' => 'TV'
        // ]);
        // category::create([
        //     'category' => 'Bike'
        // ]);
        // category::create([
        //     'category' => 'Others'
        // ]);

        // Listing::create([
        //     'cat_id' => 6,
        //     'brand' => 'Bajaj',
        //     'title' => 'Iron heater',
        //     'description' => '2 year old new condition all accersories available',
        //     'price' => '999',
        //     'location' => 'Bihar',
        //     'file' => 'store',
        // ]);
    }
}
