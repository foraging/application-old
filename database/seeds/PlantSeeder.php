<?php

use App\Models\Plant;
use Illuminate\Database\Seeder;

class PlantSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        foreach (config('seeds.plants') as $plantData) {
            factory(Plant::class)->create($plantData);
        }
    }
}
