<?php
require_once  __DIR__ . '/../config/Framework.php';

class HomeController extends Framework
{

    public function index()
    {
        $this->loadView('login');
    }

    public function home(){
        $this->loadView('home');
    }
}
