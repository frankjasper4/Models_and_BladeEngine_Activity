<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Factories\BookFactory; // Assuming the namespace

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookFactory::count(20)->create();
    }
}