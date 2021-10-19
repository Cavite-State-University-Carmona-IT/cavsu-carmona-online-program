<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ExtensionService;

class ExtensionServiceSeeder extends Seeder
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
                'name' => 'BARANGAY ENTREPRENYUR',
                'department_id' => 1,
                'image' => 'BARANGAY_ENTREPRENYUR.png'
            ],
            [
                'name' => 'BASURA KO, AYOS KO',
                'department_id' => 2,
                'image' => 'BASURA_KO_AYOS_KO.png'
            ],
            [
                'name' => 'KAKAYAHANG TEKNIKAL TUNGO SA MAGANDANG KINABUKASAN',
                'department_id' => 3,
                'image' => 'KAKAYAHANG_TEKNIKAL_TUNGO_SA_MAGANDANG_KINABUKASAN.png'
            ],
            [
                'name' => 'PROJECT KOMPYUTER',
                'department_id' => 4,
                'image' => 'PROJECT_KOMPYUTER.png'
            ],
            [
                'name' => 'PROJECT PISARA',
                'department_id' => 5,
                'image' => 'PROJECT_PISARA.png'
            ],
        ];
        ExtensionService::insert($data);
    }
}
