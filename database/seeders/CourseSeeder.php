<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'courseName' => 'Bahasa Inggris',
            'user_id' => 1,
            'coursePicture' => 'dummyFoto2.png'
        ]);

        Course::create([
            'courseName' => 'Matematika',
            'user_id' => 2,
            'coursePicture' => 'dummyFoto2.png'
        ]);

        Course::create([
            'courseName' => 'Biologi',
            'user_id' => 3,
            'coursePicture' => 'dummyFoto2.png'
        ]);

        Course::create([
            'courseName' => 'Sejarah',
            'user_id' => 4,
            'coursePicture' => 'dummyFoto2.png'
        ]);

        Course::create([
            'courseName' => 'Bahasa Indonesia',
            'user_id' => 5,
            'coursePicture' => 'dummyFoto2.png'
        ]);

        Course::create([
            'courseName' => 'Fisika',
            'user_id' => 6,
            'coursePicture' => 'dummyFoto2.png'
        ]);
    }
}
