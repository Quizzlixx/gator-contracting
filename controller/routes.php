<?php

class Routes
{
    private $_f3;

    function __construct($f3)
    {
        $this->_f3 = $f3;
    }

    function home()
    {
        $view = new Template();
        echo $view->render("views/home.html");
    }

    function contractor()
    {
        $view = new Template();
        echo $view->render("views/contractor.html");
    }

    function client()
    {
        $view = new Template();
        echo $view->render("views/client.html");
    }

    function jobs()
    {
        $view = new Template();
        echo $view->render("views/jobs.html");
    }

    function login()
    {
        $view = new Template();
        echo $view->render("views/login.html");
    }

    function clientRegister()
    {
        $view = new Template();
        echo $view->render("views/client-register.html");
    }

    function contractorRegister()
    {
        $view = new Template();
        echo $view->render("views/contractor-register.html");
    }

}