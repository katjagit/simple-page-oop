<?php

namespace school\Controllers;

use school\View\View;
use school\Services\Db;

class MainController
{
    /** @var View  */
    private $view;

    /** @var Db */
    private $db;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
        $this->db = new Db();
    }

    public function main()
    {
        $courses = $this->db->query('SELECT * FROM `courses`;');
        var_dump($courses);
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