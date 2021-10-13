<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Webinar;

class SampleWebinarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'Leveraging Cloud and AI for Exceptional In-Home Video QoE',
                'extension_service_id' => 4,
                'speaker' => 'Adam Hotchkiss, Co-founder & Vice President, Customer Solutions and Integrations, Plume',
                'status' => 1,
                'video_link' => 'https://www.brighttalk.com/webcast/19042/503337?utm_campaign=knowledge-feed&utm_source=brighttalk-portal&utm_medium=web',
                'duration' => 59,
                'date' => '2021-10-23',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'about' =>
                'As video streaming continues to expand in all markets, including for high-bandwidth premium services like 4K, subscribers increasingly look to broadband service providers to deliver exceptional service quality.

                When you add in the growing bandwidth appetite of smart home devices, how can service providers deliver consistent, exceptional QoE and so suppress opex and churn?

                This webinar will examine these Key topics:
                • Broadband service providers must ‘own the in-home video streaming experience’
                • How to achieve exceptional QoE and reduce operational costs by leveraging data to establish the pillar of flawless WiFi delivery
                • The key elements for success: Adaptive WiFi, Traffic Prioritization, QoE visibility, and advanced device typing',

            ]
        ];
        Webinar::insert($data);
    }
}
