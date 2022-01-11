<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $beers = ['Peroni', 'Ichnusa', 'Brew Dog', 'Birra artigianale chiara', 'Birra artigianale scura', 'Paulaner', 'Leffe'];

        foreach ($beers as $beer) {
            DB::table('Beers')->insert([
                'name' => $beer,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

            ]);
        }
    }
}
