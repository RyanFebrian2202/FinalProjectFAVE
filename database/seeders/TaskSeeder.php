<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::create([
            'taskName' => 'Task 1',
            'taskDetail' => 'Upload your interview rating sheet and video link. The video should be uploaded on Drive/Youtube(UNLISTED) and accessible for us to check. The rating sheet is attached below
            Format: Group No_Class',
            'taskDeadline' => date_create("2022-09-7"),
            'course_id' => 1
        ]);

        Task::create([
            'taskName' => 'Task 2',
            'taskDetail' => 'Upload your interview rating sheet and video link. The video should be uploaded on Drive/Youtube(UNLISTED) and accessible for us to check. The rating sheet is attached below
            Format: Group No_Class',
            'taskDeadline' => date_create("2022-09-14"),
            'course_id' => 1
        ]);

        Task::create([
            'taskName' => 'Task 3',
            'taskDetail' => 'Upload your interview rating sheet and video link. The video should be uploaded on Drive/Youtube(UNLISTED) and accessible for us to check. The rating sheet is attached below
            Format: Group No_Class',
            'taskDeadline' => date_create("2022-09-21"),
            'course_id' => 1
        ]);

        Task::create([
            'taskName' => 'Task 1',
            'taskDetail' => 'Upload your interview rating sheet and video link. The video should be uploaded on Drive/Youtube(UNLISTED) and accessible for us to check. The rating sheet is attached below
            Format: Group No_Class',
            'taskDeadline' => date_create("2022-09-7"),
            'course_id' => 2
        ]);

        Task::create([
            'taskName' => 'Task 2',
            'taskDetail' => 'Upload your interview rating sheet and video link. The video should be uploaded on Drive/Youtube(UNLISTED) and accessible for us to check. The rating sheet is attached below
            Format: Group No_Class',
            'taskDeadline' => date_create("2022-09-14"),
            'course_id' => 2
        ]);

        Task::create([
            'taskName' => 'Task 3',
            'taskDetail' => 'Upload your interview rating sheet and video link. The video should be uploaded on Drive/Youtube(UNLISTED) and accessible for us to check. The rating sheet is attached below
            Format: Group No_Class',
            'taskDeadline' => date_create("2022-09-21"),
            'course_id' => 2
        ]);

        Task::create([
            'taskName' => 'Task 1',
            'taskDetail' => 'Upload your interview rating sheet and video link. The video should be uploaded on Drive/Youtube(UNLISTED) and accessible for us to check. The rating sheet is attached below
            Format: Group No_Class',
            'taskDeadline' => date_create("2022-09-7"),
            'course_id' => 3
        ]);

        Task::create([
            'taskName' => 'Task 2',
            'taskDetail' => 'Upload your interview rating sheet and video link. The video should be uploaded on Drive/Youtube(UNLISTED) and accessible for us to check. The rating sheet is attached below
            Format: Group No_Class',
            'taskDeadline' => date_create("2022-09-14"),
            'course_id' => 3
        ]);

        Task::create([
            'taskName' => 'Task 3',
            'taskDetail' => 'Upload your interview rating sheet and video link. The video should be uploaded on Drive/Youtube(UNLISTED) and accessible for us to check. The rating sheet is attached below
            Format: Group No_Class',
            'taskDeadline' => date_create("2022-09-21"),
            'course_id' => 3
        ]);

        Task::create([
            'taskName' => 'Task 1',
            'taskDetail' => 'Upload your interview rating sheet and video link. The video should be uploaded on Drive/Youtube(UNLISTED) and accessible for us to check. The rating sheet is attached below
            Format: Group No_Class',
            'taskDeadline' => date_create("2022-09-7"),
            'course_id' => 4
        ]);

        Task::create([
            'taskName' => 'Task 2',
            'taskDetail' => 'Upload your interview rating sheet and video link. The video should be uploaded on Drive/Youtube(UNLISTED) and accessible for us to check. The rating sheet is attached below
            Format: Group No_Class',
            'taskDeadline' => date_create("2022-09-14"),
            'course_id' => 4
        ]);

        Task::create([
            'taskName' => 'Task 3',
            'taskDetail' => 'Upload your interview rating sheet and video link. The video should be uploaded on Drive/Youtube(UNLISTED) and accessible for us to check. The rating sheet is attached below
            Format: Group No_Class',
            'taskDeadline' => date_create("2022-09-21"),
            'course_id' => 4
        ]);

        Task::create([
            'taskName' => 'Task 1',
            'taskDetail' => 'Upload your interview rating sheet and video link. The video should be uploaded on Drive/Youtube(UNLISTED) and accessible for us to check. The rating sheet is attached below
            Format: Group No_Class',
            'taskDeadline' => date_create("2022-09-7"),
            'course_id' => 5
        ]);

        Task::create([
            'taskName' => 'Task 2',
            'taskDetail' => 'Upload your interview rating sheet and video link. The video should be uploaded on Drive/Youtube(UNLISTED) and accessible for us to check. The rating sheet is attached below
            Format: Group No_Class',
            'taskDeadline' => date_create("2022-09-14"),
            'course_id' => 5
        ]);

        Task::create([
            'taskName' => 'Task 3',
            'taskDetail' => 'Upload your interview rating sheet and video link. The video should be uploaded on Drive/Youtube(UNLISTED) and accessible for us to check. The rating sheet is attached below
            Format: Group No_Class',
            'taskDeadline' => date_create("2022-09-21"),
            'course_id' => 5
        ]);

        Task::create([
            'taskName' => 'Task 1',
            'taskDetail' => 'Upload your interview rating sheet and video link. The video should be uploaded on Drive/Youtube(UNLISTED) and accessible for us to check. The rating sheet is attached below
            Format: Group No_Class',
            'taskDeadline' => date_create("2022-09-7"),
            'course_id' => 6
        ]);

        Task::create([
            'taskName' => 'Task 2',
            'taskDetail' => 'Upload your interview rating sheet and video link. The video should be uploaded on Drive/Youtube(UNLISTED) and accessible for us to check. The rating sheet is attached below
            Format: Group No_Class',
            'taskDeadline' => date_create("2022-09-14"),
            'course_id' => 6
        ]);

        Task::create([
            'taskName' => 'Task 3',
            'taskDetail' => 'Upload your interview rating sheet and video link. The video should be uploaded on Drive/Youtube(UNLISTED) and accessible for us to check. The rating sheet is attached below
            Format: Group No_Class',
            'taskDeadline' => date_create("2022-09-21"),
            'course_id' => 6
        ]);
    }
}
