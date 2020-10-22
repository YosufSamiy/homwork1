<?php

use Illuminate\Database\Seeder;

class officesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\offices::class,10)->create();
    }
}
