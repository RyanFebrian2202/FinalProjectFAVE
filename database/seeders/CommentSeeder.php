<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            'content' => 'Baik Bu',
            'user_id' => 7,
            'task_id' => 1
        ]);

        Comment::create([
            'content' => 'Terima kasih Bu',
            'user_id' => 9,
            'task_id' => 1
        ]);
    }
}
