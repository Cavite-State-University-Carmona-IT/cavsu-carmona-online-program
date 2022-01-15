<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ExtensionService;
use Illuminate\Support\Facades\DB;

class ExtensionServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('extension_services')->truncate();
        $data = [
            [
                'name' => 'Barangay Entreprenyur',
                'link_name' => 'barangay-entreprenyur',
                'department_id' => 1,
                'image' => 'bw-BARANGAY_ENTREPRENYUR.png',
                'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac rutrum mi. Ut eu tincidunt elit, a lobortis orci.',
            ],
            [
                'name' => 'Basura Ko, Ayos Ko',
                'link_name' => 'basura-ko-ayos-ko',
                'department_id' => 2,
                'image' => 'bw-BASURA_KO_AYOS_KO.png',
                'details' => 'Proin imperdiet dolor at eros consequat maximus. Vestibulum blandit mi quis porta sagittis. Praesent sed dapibus ex.',
            ],
            [
                'name' => 'Kakayahang Teknikal Tungo sa Magandang Kinabukasan',
                'link_name' => 'kakayahang-teknikal-tungo-sa-magandang-kinabukasan',
                'department_id' => 3,
                'image' => 'bw-KAKAYAHANG_TEKNIKAL_TUNGO_SA_MAGANDANG_KINABUKASAN.png',
                'details' => 'Praesent non nunc id nulla fermentum tempus eu vitae massa. Mauris egestas nunc vel varius dapibus.',
            ],
            [
                'name' => 'Project Kompyuter',
                'link_name' => 'project-kompyuter',
                'department_id' => 4,
                'image' => 'bw-PROJECT_KOMPYUTER.png',
                'details' => 'Praesent non nunc id nulla fermentum tempus eu vitae massa. Mauris egestas nunc vel varius dapibus.',
            ],
            [
                'name' => 'Project Pisara',
                'link_name' => 'project-pisara',
                'department_id' => 5,
                'image' => 'bw-PROJECT_PISARA.png',
                'details' => 'Nullam efficitur euismod nulla, dignissim facilisis ex auctor quis. Nullam vestibulum ligula quis finibus egestas. ',
            ],
        ];
        ExtensionService::insert($data);
    }
}
