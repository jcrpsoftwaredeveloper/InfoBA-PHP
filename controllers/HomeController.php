<?php

namespace controllers;

use libs\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->home();
    }

    function home(){
        $this->view->render('public/home', $this->data);
    }
}