<?php

namespace school\View;

class View
{
    private string $templatesPath;

    public function __construct(string $templatesPath)
    {
        $this->templatesPath = $templatesPath;
    }

    public function renderHtml(string $templateName, array $vars = [])
    {
        extract($vars);

        ob_start();

        include $this->templatesPath . '/' . $templateName;

        $buffer = ob_get_contents();
        ob_end_clean();

        echo $buffer;
    }
}