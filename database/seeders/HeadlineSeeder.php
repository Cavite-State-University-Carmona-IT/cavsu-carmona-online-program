<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Headline;
use Illuminate\Support\Facades\DB;

class HeadlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headlines')->delete();
        DB::table('headlines')->truncate();
        $data = [
            [
                'name' => 'Headline sample 1',
                'image' => "headline1.jpg",
                'visible' => true,
            ],
            [
                'name' => 'Headline sample 2',
                'image' => "headline2.jpg",
                'visible' => true,
            ],
        ];

        Headline::insert($data);

    }
}
