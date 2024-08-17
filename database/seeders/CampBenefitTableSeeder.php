<?php

namespace Database\Seeders;

use App\Models\CampBenefit;
use Illuminate\Database\Seeder;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefits = [
            [
                'camp_id' => 1,
                'name' => 'Pro Laravel kit',
            ],
            [
                'camp_id' => 1,
                'name' => '1-1 on Mentoring Progress',
            ],
            [
                'camp_id' => 1,
                'name' => 'Final Projects',
            ],
            [
                'camp_id' => 1,
                'name' => 'Job Oppurtunity',
            ],
            [
                'camp_id' => 1,
                'name' => 'Certificate',
            ],
            [
                'camp_id' => 1,
                'name' => 'Website Builder',
            ],
            [
                'camp_id' => 2,
                'name' => '1-1 Mentoring',
            ],
            [
                'camp_id' => 2,
                'name' => 'Final Project',
            ],
            [
                'camp_id' => 2,
                'name' => 'Offline Course videos',
            ],
        ];

        CampBenefit::insert($campBenefits);
    }
}
