<?php

namespace School\Controllers;

use school\Models\Courses\Course;
use school\Models\Users\User;
use School\View\View;

class CoursesController
{
    /** @var View */
    private $view;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
    }

    public function view(int $courseId)
    {
        $course = Course::getById($courseId);

        if($course === null) {
            $this->view->renderHtml('errors/404.php', [], 404);
            return;
        }

        $courseTeacher = User::getById($course->getTeacherId());

        $this->view->renderHtml('courses/view.php', ['course' => $course, 'teacher' => $courseTeacher]);
    }
}