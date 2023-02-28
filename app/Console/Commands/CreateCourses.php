<?php

namespace App\Console\Commands;

use App\Models\Course;
use Illuminate\Console\Command;

class CreateCourses extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'courses:create {count}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Courses Creator';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        Course::factory()->count($this->argument('count'))->create();
    }
}
