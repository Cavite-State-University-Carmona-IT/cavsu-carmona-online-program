<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FieldOfInterest;
use Illuminate\Support\Facades\DB;

class SampleFieldOfInterestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

            // Barangay Entreprenyur
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
            [
                'name' => 'Sales',
                'link_name' => 'sales',
                'extension_service_id' => 1,
            ],
            [
                'name' => 'Business Strategy',
                'link_name' => 'business-strategy',
                'extension_service_id' => 1,
            ],
            [
                'name' => 'Operations',
                'link_name' => 'operations',
                'extension_service_id' => 1,
            ],
            [
                'name' => 'Project Management',
                'link_name' => 'project-management',
                'extension_service_id' => 1,
            ],
            [
                'name' => 'Business Law',
                'link_name' => 'business-law',
                'extension_service_id' => 1,
            ],
            [
                'name' => 'Business Analytics & Intelligence',
                'link_name' => 'business-analytics-and-intelligence',
                'extension_service_id' => 1,
            ],
            [
                'name' => 'Human Resources',
                'link_name' => 'human-resources',
                'extension_service_id' => 1,
            ],
            [
                'name' => 'Industry',
                'link_name' => 'industry',
                'extension_service_id' => 1,
            ],
            [
                'name' => 'E-Commerce',
                'link_name' => 'e-commerce',
                'extension_service_id' => 1,
            ],
            [
                'name' => 'Media',
                'link_name' => 'media',
                'extension_service_id' => 1,
            ],
            [
                'name' => 'Real Estate',
                'link_name' => 'real-estate',
                'extension_service_id' => 1,
            ],
            [
                'name' => 'Other Business',
                'link_name' => 'other-business',
                'extension_service_id' => 1,
            ],

            // PROJECT KOMPYUTER
            [
                'name' => 'IT Certifications',
                'link_name' => 'it-certifications',
                'extension_service_id' => 4,
            ],
            [
                'name' => 'Network & Security',
                'link_name' => 'network-and-security',
                'extension_service_id' => 4,
            ],
            [
                'name' => 'Hardware',
                'link_name' => 'hardware',
                'extension_service_id' => 4,
            ],
            [
                'name' => 'Operating Systems & Servicing',
                'link_name' => 'operating-systems-and-servicing',
                'extension_service_id' => 4,
            ],
            [
                'name' => 'Other IT & Software',
                'link_name' => 'other-it-and-software',
                'extension_service_id' => 4,
            ],
        ];

        FieldOfInterest::truncate();

        FieldOfInterest::insert($data);
    }
}
