<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApplicantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $applicant = [
            [
                'name' => 'mariam',
                'surname' => 'mariam',
                'position' => 'mariam',
                'phone' => '12345678',
                'is_hired' => false,
            ],[
                'name' => 'mariam',
                'surname' => 'mariam',
                'position' => 'mariam',
                'phone' => '12345678',
                'is_hired' => false,
            ],[
                'name' => 'mariam',
                'surname' => 'mariam',
                'position' => 'mariam',
                'phone' => '12345678',
                'is_hired' => false,
            ],[
                'name' => 'mariam',
                'surname' => 'mariam',
                'position' => 'mariam',
                'phone' => '12345678',
                'is_hired' => false,
            ],[
                'name' => 'mariam',
                'surname' => 'mariam',
                'position' => 'mariam',
                'phone' => '12345678',
                'is_hired' => false,
            ],[
                'name' => 'mariam',
                'surname' => 'mariam',
                'position' => 'mariam',
                'phone' => '12345678',
                'is_hired' => false,
            ],[
                'name' => 'mariam',
                'surname' => 'mariam',
                'position' => 'mariam',
                'phone' => '12345678',
                'is_hired' => false,
            ],[
                'name' => 'mariam',
                'surname' => 'mariam',
                'position' => 'mariam',
                'phone' => '12345678',
                'is_hired' => false,
            ],
        ];
        foreach ($applicant as $item) {
            DB::table('applicants')->insert($item);
        }
    }
}
