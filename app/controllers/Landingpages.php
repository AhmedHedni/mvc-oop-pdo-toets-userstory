<?php

class Landingpages extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Homepage MVC-OOP-PDO',
            'sayHello' => 'Hallo'
        ];
        $this->view('landingpages/index', $data);
    }
}
