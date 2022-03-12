<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\SchoolStuff;
use App\Models\Users;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SchoolStuffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Department::insert([
            'id' => 1,
            'department_name' => 'Müdür',
            'slug' => str_slug('müdür'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Users::insert([
            'username' => 'Mahmut',
            'email' => 'test@test.com',
            'resource' => 1,
            'resource_id' => 1,
            'password' => bcrypt(102030),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        SchoolStuff::insert([
            'department_id' => 1,
            'name' =>'Mahmut',
            'email' => 'test@test.com',
            'phone' => '1234567890',
            'image' => asset('back/img/contact/1.jpg'),
            'is_teacher' => rand(0, 1),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
