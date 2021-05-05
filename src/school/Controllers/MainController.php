<?php

namespace school\Controllers;

use school\Models\Courses\Course;
use school\View\View;

class MainController
{
    /** @var View  */
    private $view;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
    }

    public function main()
    {
        $courses = Course::findAll();

        $this->view->renderHtml('main/main.php', ['courses' => $courses]);

    }

    public function sayHello(string $name)
    {
        $this->view->renderHtml('main/hello.php', ['name' => $name]);
    }

    public function sayBye(string $name)
    {
        echo 'Tschüß ' . $name;
    }
}