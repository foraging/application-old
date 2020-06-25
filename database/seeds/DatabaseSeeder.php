<?php

use App\Models\Animal;
use App\Models\Park;
use App\Models\Plant;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ParkSeeder::class);
        $this->call(AnimalSeeder::class);
        $this->call(PlantSeeder::class);

        // Link all animals to all parks
        foreach (Park::all() as $park) {
            $park->setAnimals(Animal::all());
            $park->setPlants(Plant::all());
            $park->persist();
        }
    }
}
