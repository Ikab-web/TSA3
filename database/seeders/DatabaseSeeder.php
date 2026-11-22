<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(['username' => 'student'], [
            'full_name' => 'Student Developer',
            'email' => 'student@example.com',
        ]);

        Task::query()->delete();
        foreach ([
            ['Prepare project outline', 'pending', today()],
            ['Review lecture notes', 'in progress', today()],
            ['Submit laboratory activity', 'pending', today()],
            ['Organize study materials', 'completed', today()->subDay()],
            ['Practice Laravel migrations', 'pending', today()->subDay()],
            ['Read Eloquent documentation', 'completed', today()->subDays(2)],
            ['Plan weekly study schedule', 'pending', today()->addDay()],
            ['Back up project files', 'pending', today()->addDay()],
        ] as [$title, $status, $date]) {
            Task::create(['title' => $title, 'status' => $status, 'task_date' => $date]);
        }
    }
}
