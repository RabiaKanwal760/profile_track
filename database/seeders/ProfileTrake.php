<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileTrake extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ProfileTrake::factory(10)->create();
        \App\Models\ProfileTrake::factory(10)->create();


    //    $this->call([
    //     ProfileTrake::class
    //    ]);
    }
    
}
