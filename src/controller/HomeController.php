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

    public function register() {
        $this->loadView('register');
    }

    public function login() {
        $this->loadView('login-account');
    }

    public function profile() {
        $this->loadView('profile');
    }

      public function logout() {
        $this->loadView('login');
    }
}
