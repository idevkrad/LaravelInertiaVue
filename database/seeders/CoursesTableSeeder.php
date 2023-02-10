<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('courses')->delete();
        
        \DB::table('courses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Bachelor of Science in Civil Engineering',
                'acronym' => 'BSCE',
                'is_active' => 1,
                'prospectus' => json_encode([]),
                'college_id' => 1,
                'created_at' => '2023-02-09 07:06:06',
                'updated_at' => '2023-02-09 07:06:06',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Bachelor of Science in Computer Engineering',
                'acronym' => 'BSCoE',
                'is_active' => 1,
                'prospectus' => json_encode([]),
                'college_id' => 1,
                'created_at' => '2023-02-09 07:06:06',
                'updated_at' => '2023-02-09 07:06:06',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Bachelor of Science in Nursing',
                'acronym' => 'BSN',
                'is_active' => 1,
                'prospectus' => json_encode([]),
                'college_id' => 2,
                'created_at' => '2023-02-09 07:07:35',
                'updated_at' => '2023-02-09 07:07:35',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Bachelor of Science in Information Technology',
                'acronym' => 'BSIT',
                'is_active' => 1,
                'prospectus' => json_encode([]),
                'college_id' => 3,
                'created_at' => '2023-02-09 07:08:32',
                'updated_at' => '2023-02-09 07:08:32',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Bachelor of Science in Architecture',
                'acronym' => 'BSA',
                'is_active' => 1,
                'prospectus' => json_encode([]),
                'college_id' => 4,
                'created_at' => '2023-02-09 07:09:20',
                'updated_at' => '2023-02-09 07:09:20',
            ),
        ));
        
        
    }
}