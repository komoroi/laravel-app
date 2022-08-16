<?php

namespace Database\Seeders;

use App\Models\Example;
use Database\Factories\ExampleFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('examples')->insert([
        //     'id'=>10,
        // ]);
        Example::factory()->count( count:3)->create();
    }
}
