<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FieldOfInterest;
use Illuminate\Support\Facades\DB;

class FieldOfInterestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('field_of_interests')->truncate();
        $data = [
            // entre
            [
                'name' => 'Entrepreneurship',
                'link_name' => 'entrepreneurship',
                'extension_service_id' => 1,
            ],
            [
                'name' => 'Communication',
                'link_name' => 'communication',
                'extension_service_id' => 1,
            ],
            [
                'name' => 'Management',
                'link_name' => 'management',
                'extension_service_id' => 1,
            ],

            // basura
            [
                'name' => 'Sales',
                'link_name' => 'sales',
                'extension_service_id' => 2,
            ],
            [
                'name' => 'Business Strategy',
                'link_name' => 'business-strategy',
                'extension_service_id' => 2,
            ],
            [
                'name' => 'Operations',
                'link_name' => 'operations',
                'extension_service_id' => 2,
            ],

            // kaka
            [
                'name' => 'Project Management',
                'link_name' => 'project-management',
                'extension_service_id' => 3,
            ],
            [
                'name' => 'Business Law',
                'link_name' => 'business-law',
                'extension_service_id' => 3,
            ],
            [
                'name' => 'Shine Gas',
                'link_name' => 'shine-gas',
                'extension_service_id' => 3,
            ],

            // project 
            [
                'name' => 'IT Certification',
                'link_name' => 'it-certification',
                'extension_service_id' => 4,
            ],
            [
                'name' => 'Network Security',
                'link_name' => 'network-security',
                'extension_service_id' => 4,
            ],
            [
                'name' => 'Hardware',
                'link_name' => 'hardware',
                'extension_service_id' => 4,
            ],

            // pisara

            [
                'name' => 'Environment',
                'link_name' => 'environment',
                'extension_service_id' => 5,
            ],
            [
                'name' => 'Fashion & Styling',
                'link_name' => 'fashion-and-styling',
                'extension_service_id' => 5,
            ],
            [
                'name' => 'Innovation',
                'link_name' => 'innovation',
                'extension_service_id' => 5,
            ],
        ];
        FieldOfInterest::insert($data);
    }
}
