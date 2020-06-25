<?php

use App\Models\Park;
use Illuminate\Database\Seeder;

class ParkSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        foreach (config('seeds.parks') as $parkData) {
            factory(Park::class)->create($parkData);
        }
    }
}
