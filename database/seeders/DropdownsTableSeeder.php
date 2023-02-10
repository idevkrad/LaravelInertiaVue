<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DropdownsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('dropdowns')->delete();
        
        \DB::table('dropdowns')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'n/a',
                'classification' => 'n/a',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '1st',
                'classification' => 'Year',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'I',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '2nd ',
                'classification' => 'Year',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'II',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => '3rd',
                'classification' => 'Year',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'III',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => '4th',
                'classification' => 'Year',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'IV',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => '5th',
                'classification' => 'Year',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'V',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Good Standing',
                'classification' => 'Student Status',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
        ));
        
    }
}