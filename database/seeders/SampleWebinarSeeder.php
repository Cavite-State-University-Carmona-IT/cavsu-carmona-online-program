<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Webinar;
use Illuminate\Support\Facades\DB;

class SampleWebinarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Webinar::truncate();
        $data = [
            [
                'title' => 'Leveraging Cloud and AI for Exceptional In-Home Video QoE',
                'image' => "web1.jpg",
                'extension_service_id' => 1,
                'speaker' => 'Adam Hotchkiss, Co-founder & Vice President, Customer Solutions and Integrations, Plume',
                'status' => 1,
                'video_link' => 'g_jUtiKSf1Y',
                'duration' => 59,
                'date' => '2021-10-23',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'ecertificate_property_id' => 1,
                'created_by' => 1,
                'about' =>
                'As video streaming continues to expand in all markets, including for high-bandwidth premium services like 4K, subscribers increasingly look to broadband service providers to deliver exceptional service quality.

                When you add in the growing bandwidth appetite of smart home devices, how can service providers deliver consistent, exceptional QoE and so suppress opex and churn?

                This webinar will examine these Key topics:
                • Broadband service providers must ‘own the in-home video streaming experience’
                • How to achieve exceptional QoE and reduce operational costs by leveraging data to establish the pillar of flawless WiFi delivery
                • The key elements for success: Adaptive WiFi, Traffic Prioritization, QoE visibility, and advanced device typing',
            ],
            [
                'title' => 'Why VCs say  no - How to secure investment for your startup',
                'image' => "web2.jpg",
                'extension_service_id' => 2,
                'speaker' => 'Zoë Chambers, Principal, Octopus Ventures | Camilla Mazzolini, Principal, Firstminute Capital | Dave Rosenberg, Oracle',
                'status' => 1,
                'video_link' => 'mm1mcwu3c3A',
                'duration' => 62,
                'date' => '2021-10-14',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'ecertificate_property_id' => 1,
                'created_by' => 1,
                'about' =>
                'For any startup founder looking for the next stage of growth, understanding why VCs say ‘no’ is as important as why they say ‘yes’.

                In partnership with Sifted Talks, will discuss everything you need to know to understand the VC mindset.

                You will learn in this webinar:
                • What does a VCs deal flow funnel look like? How many prospects make it from cold email to the investment committee?
                • How many startups do VCs turn down per week, and what are the top reasons?
                • How should founders prepare to increase their chances of getting a ‘yes’?

                Speakers:
                - Zoë Chambers, Principal, Octopus Ventures
                - Camilla Mazzolini, Principal, Firstminute Capital
                - Dave Rosenberg, Head of Marketing, Business Development & Private Equity EMEA
                - Michael Stothard, Editor & Moderator, Sifted',
            ],
            [
                'title' => 'Finance in 2021 and beyond: Planning for the Future',
                'image' => "web3.jpg",
                'extension_service_id' => 3,
                'speaker' => 'Jason Balk, CFO, Adtegrity | Dan Rosenthal, CFO, Root Insurance | Jill Schiefelbein, Business communication expert',
                'status' => 1,
                'video_link' => 'g_jUtiKSf1Y',
                'duration' => 60,
                'date' => '2021-09-21',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'ecertificate_property_id' => 1,
                'created_by' => 1,
                'about' =>
                'Throughout this year, financial forecasts have remained a moving target. With so much uncertainty still looming, how does your business continue to strategize for the future? What are the trends that are the most important to examine? And how are external factors impacting your business in ways that you can’t easily predict?

                In partnership with Entrepreneur.com, business communication expert and Dynamic Communication author Jill Schiefelbein will lead a conversation with two leading CFOs about what they’re examining, analyzing, and planning in 2021 and beyond.

                Jason Balk, CFO at Adtegrity, and Dan Rosenthal, CFO at Root Insurance will share best practices to predict and plan, help uncover how financial roles are evolving and the financial trends that your company needs to be paying attention in the future.

                You will learn in this webinar:
                • Different viewpoints on short term and long-term planning, and how these have changed in the past year
                • Cascading impacts on your bottom line that are emerging from external business factors
                • Reaction timelines and how they need to change based on underlying data
                • Cash flow versus sales data, and how marrying the two together gives you the best picture
                • Responsibilities in accounting and financial positions and how they need to change to adapt to the current economic environment',
            ],
            [
                'title' => 'Stay SaaSy: How to sell SaaS in a crowded market',
                'image' => "web4.jpg",
                'extension_service_id' => 4,
                'speaker' => 'Amy Lewin | Òscar Carbonell Dolz | Itxaso del Palacio | Dave Rosenberg',
                'status' => 1,
                'video_link' => '6uddGul0oAc',
                'duration' => 60,
                'date' => '2021-10-14',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'ecertificate_property_id' => 1,
                'created_by' => 1,
                'about' =>
                '2020/2021 were the years of SaaS: from Zoom to Slack to Hopin, we couldnt get enough of the tools that made remote work work. And neither could VCs, pouring a record 11bn EUR into SaaS startups across Europe in 2020/2021.',
            ],
            [
                'title' => 'VISIONARIES: Leading Practices for Developing the New Hybrid Workplace',
                'image' => "web5.jpg",
                'extension_service_id' => 5,
                'speaker' => 'Entrust with special guest Dion Hinchcliffe',
                'status' => 1,
                'video_link' => 'PWbRleMGagU',
                'duration' => 60,
                'date' => '2021-10-14',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'ecertificate_property_id' => 1,
                'created_by' => 1,
                'about' =>
                'Work has transformed more in the last 18 months than it has for over a decade. The shift to remote work was sudden and dramatic, yet the steady shift to hybrid work, where some workers are in the office and some remain at home, is catching many organizations unprepared as they head into 2022. This shift requires sustaining a connection between two different groups of workers that still maintains a common culture, a standard way of working that can be switched back and forth, and new collaborative regimes that bridge the gap, all while making sure that the place in which the work is done, wherever it is located, is safe, secure and enabling. Attendees of this Webinar will learn from a top digital workplace expert what the leading organizations in the world are doing -- along with the latest emerging best practices -- to create a new hybrid work environment that is flexible, resilience, and productive.',
            ],
            // unpublished
            [
                'title' => 'LinkedIn fmr Product Lead on Leadership Skills Learned from Mythology',
                'image' => "web6.jpg",
                'extension_service_id' => 1,
                'speaker' => 'Prasad Gune',
                'status' => 2,
                'video_link' => 'Sw1Flgub9s8',
                'duration' => 82,
                'date' => '2019-11-07',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'ecertificate_property_id' => 1,
                'created_by' => 1,
                'about' =>
                'This lively session connects two of mankind’s greatest inventions: product management and world mythology. Enough with that newfangled stuff - boost your product leadership skills with learnings that are thousands of years old. How do mythological tales apply to delivering great product outcomes? LinkedIn fmr Product Lead, Prasad Gune’s, extensive experience in enterprise and consumer software means you’ll walk away with actionable insights for your PM toolkit (and maybe hear a new myth or two).

                Prasad Gune is SVP, Product at Signifyd, the world’s largest provider of guaranteed fraud protection. Before joining Signifyd, Prasad was Senior Vice President for product at OpenTable, leading global product management, strategy and design for all consumer and restaurant products and experiences. Prior to OpenTable, he spent seven years at LinkedIn, serving as product lead for LinkedIn Recruiter, building it from its infancy into LinkedIn’s flagship monetization product within the Talent Solutions business. Prior to LinkedIn, Prasad held senior product management roles at Oracle and Siebel Systems as well as various consulting roles at Bain & Company.',
            ],
            [
                'title' => 'Moving Fast and Saving Lives!',
                'image' => "web7.jpg",
                'extension_service_id' => 2,
                'speaker' => 'Vidya Venkatesh',
                'status' => 2,
                'video_link' => '4MoRLTAJY_0',
                'duration' => 33,
                'date' => '2021-09-09',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'ecertificate_property_id' => 1,
                'created_by' => 1,
                'about' =>
                'Exact Sciences Global Product and Strategy Leader Vidya Venkatesh dives into what makes commercially successful and impactful healthcare products.',
            ],
            [
                'title' => 'How Remote Sensing Powers Agriculture',
                'image' => "web8.jpg",
                'extension_service_id' => 3,
                'speaker' => 'Billy Cripe, VP Marketing at CIBO',
                'status' => 2,
                'video_link' => 'JJaCwW4HyVs',
                'duration' => 66,
                'date' => '2021-09-09',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'ecertificate_property_id' => 1,
                'created_by' => 1,
                'about' =>
                'Remote sensing measures crop growth throughout the year so that the growers can analyze conditions based on the data and take action that will have a positive influence on the harvest outcome. But what exactly is remote sensing? The CIBO team will share an overview of remote sensing, ways to use the data and how remote sensing data can be used for decision-making among the agriculture and food security communities.',
            ],
            [
                'title' => 'Applying Data Science to Agriculture',
                'image' => "web9.jpg",
                'extension_service_id' => 4,
                'speaker' => 'Billy Cripe',
                'status' => 2,
                'video_link' => 'hz4WCaWJgOqM',
                'duration' => 64,
                'date' => '2021-07-09',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'ecertificate_property_id' => 1,
                'created_by' => 1,
                'about' =>
                'A live discussion featuring the data scientists at CIBO. We will be bringing awareness to the reasons people interested in data science should be watching agriculture and taking your questions!',
            ],
            [
                'title' => 'ThoughtWorks Tech. Radar Vol. 23 Sneak Peek',
                'image' => "web10.jpg",
                'extension_service_id' => 5,
                'speaker' => 'Mike Mason, CTO, ThoughtWorks, Zhamak Dehghani, ThoughtWorks, Cassie Shum, ThoughtWorks',
                'status' => 2,
                'video_link' => '3jWRrafhO7M',
                'duration' => 59,
                'date' => '2021-01-28',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'ecertificate_property_id' => 1,
                'created_by' => 1,
                'about' =>
                'Remote sensing measures crop growth throughout the year so that the growers can analyze conditions based on the data and take action that will have a positive influence on the harvest outcome. But what exactly is remote sensing? The CIBO team will share an overview of remote sensing, ways to use the data and how remote sensing data can be used for decision-making among the agriculture and food security communities.',
            ],
        ];
        Webinar::insert($data);
    }
}
