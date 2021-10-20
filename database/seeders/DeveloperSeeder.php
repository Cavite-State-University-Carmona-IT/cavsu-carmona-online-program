<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LaratrustSeeder::class);
        $this->call(ExtensionServiceSeeder::class);
        $this->call(SampleWebinarSeeder::class);
        $this->call(WebinarUserSeeder::class);
    }
}
