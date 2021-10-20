<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\WebinarUser;
use Carbon\Carbon;

class WebinarUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('webinar_users')->delete();
        $data = [
            [
                'user_id' => 1,
                'webinar_id' => 1,
                'date_completed' => Carbon::now(),
                'ecertificate_link' => 'aaaaaaaaa',
            ],
            [
                'user_id' => 1,
                'webinar_id' => 2,
                'date_completed' => Carbon::now(),
                'ecertificate_link' => 'aaaaaaaaa',
            ],
            [
                'user_id' => 1,
                'webinar_id' => 3,
                'date_completed' => Carbon::now(),
                'ecertificate_link' => 'aaaaaaaaa',
            ],
            [
                'user_id' => 1,
                'webinar_id' => 4,
                'date_completed' => Carbon::now(),
                'ecertificate_link' => 'aaaaaaaaa',
            ],
            [
                'user_id' => 1,
                'webinar_id' => 5,
                'date_completed' => Carbon::now(),
                'ecertificate_link' => 'aaaaaaaaa',
            ],
            [
                'user_id' => 1,
                'webinar_id' => 6,
                'date_completed' => Carbon::now(),
                'ecertificate_link' => 'aaaaaaaaa',
            ],
            [
                'user_id' => 1,
                'webinar_id' => 7,
                'date_completed' => Carbon::now(),
                'ecertificate_link' => 'aaaaaaaaa',
            ],
            [
                'user_id' => 1,
                'webinar_id' => 8,
                'date_completed' => Carbon::now(),
                'ecertificate_link' => 'aaaaaaaaa',
            ],
            [
                'user_id' => 1,
                'webinar_id' => 9,
                'date_completed' => Carbon::now(),
                'ecertificate_link' => 'aaaaaaaaa',
            ],
            [
                'user_id' => 1,
                'webinar_id' => 10,
                'date_completed' => Carbon::now(),
                'ecertificate_link' => 'aaaaaaaaa',
            ],
        ];
        WebinarUser::insert($data);
    }
}
