<?php

use App\Models\Animal;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        foreach (config('seeds.animals') as $animalData) {
            factory(Animal::class)->create($animalData);
        }
    }
}
