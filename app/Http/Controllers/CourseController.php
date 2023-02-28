<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CourseService;

class CourseController extends Controller
{
    public function __construct(private CourseService $courseService)
    {
    }

    public function getLongerCourses()
    {
        return $this->courseService->getLongerCourses();
    }

    public function getShorterCourses()
    {
        return $this->courseService->getShorterCourses();
    }

    public function getAll()
    {
        return $this->courseService->getAll();
    }

    public function getCoursesByName(string $name)
    {
        return $this->courseService->getCoursesByName($name);
    }
}