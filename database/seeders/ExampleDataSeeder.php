<?php

namespace Database\Seeders;

use App\Models\ExampleData;
use Illuminate\Database\Seeder;

class ExampleDataSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $exampleData = [];
        foreach (range(0, 200000) as $iteration) {
            $exampleData[] = [
                'username' => fake()->userName(),
                'first_name' => fake()->firstName(),
                'last_name' => fake()->lastName(),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        foreach (array_chunk($exampleData, 4000) as $chunk) {
            ExampleData::insert($chunk);
        }
    }
}
