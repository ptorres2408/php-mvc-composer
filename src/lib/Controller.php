<?php

namespace Ptorres\PhpMvcComposer\lib;

use Ptorres\PhpMvcComposer\lib\View;

class Controller
{
    private View $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function renderView(string $nameView, array $data = [])
    {
        $this->view->render($nameView, $data);
    }

    public function post(string $param)
    {
        return isset($_POST[$param]) ? $_POST[$param] : null;
    }

    public function get(string $param)
    {
        return isset($_GET[$param]) ? $_GET[$param] : null;
    }

    public function file(string $param)
    {
        return isset($_FILES[$param]) ? $_FILES[$param] : null;
    }
}
