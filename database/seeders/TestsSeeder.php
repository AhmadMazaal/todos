<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Tests::factory()->count(10)->create();
    }
}
