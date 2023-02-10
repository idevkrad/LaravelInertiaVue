<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'username' => 'administrator',
            'email' => 'admin@wmsu.com',
            'password' => bcrypt('123456789'),
            'role' => 'Administrator',
            'avatar' => 'administrator.png',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'email_verified_at' => now(),
        ]);

        \DB::table('profiles')->insert([
            'firstname' => 'Ra-ouf',
            'lastname' => 'Jumli',
            'middlename' => 'Indanan',
            'gender' => 'Male',
            'user_id' => 1,
            'mobile' => '09557650801',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $this->call(CollegesTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(DropdownsTableSeeder::class);
    }
}
