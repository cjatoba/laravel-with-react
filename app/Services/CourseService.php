<?php

namespace App\Services;

use App\Models\Course;

class CourseService
{
    public function __construct(private Course $repository)
    {
    }

    public function getLongerCourses(): mixed
    {
        return $this->repository->longer()->get();
    }

    public function getShorterCourses(): mixed
    {
        return $this->repository->shorter()->get();
    }

    public function getAll()
    {
        return $this->repository->all();
    }

    public function getCoursesByName(string $name)
    {
        return $this->repository->whereName($name)->get();
    }
}