<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CollegesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('colleges')->delete();
        
        \DB::table('colleges')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'College of Engineering',
                'acronym' => 'n/a',
                'is_active' => 1,
                'created_at' => '2023-02-09 07:00:31',
                'updated_at' => '2023-02-09 07:00:31',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'College of Nursing',
                'acronym' => 'n/a',
                'is_active' => 1,
                'created_at' => '2023-02-09 07:01:07',
                'updated_at' => '2023-02-09 07:01:07',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Institute of Computer Studies ',
                'acronym' => 'n/a',
                'is_active' => 1,
                'created_at' => '2023-02-09 07:04:50',
                'updated_at' => '2023-02-09 07:04:50',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'College of Architecture',
                'acronym' => 'n/a',
                'is_active' => 1,
                'created_at' => '2023-02-09 07:04:50',
                'updated_at' => '2023-02-09 07:04:50',
            ),
        ));
        
        
    }
}