<?php

/**
 * Class Routes
 */
class Routes
{
    /**
     * @var
     */
    private $_f3;
    /**
     * @var
     */
    private $_val;

    /**
     * Routes constructor.
     * @param $f3
     */
    function __construct($f3)
    {
        $this->_f3 = $f3;
    }

    /**
     *
     */
    function home()
    {
        $view = new Template();
        echo $view->render("views/home.html");
    }

    function main()
    {
        $view = new Template();
        echo $view->render("views/home.html");
    }
    /**
     *
     */
    function contractor()
    {
        $view = new Template();
        echo $view->render("views/contractor.html");
    }

    /**
     *
     */
    function contractorRegister($f3)
    {
        $view = new Template();
        echo $view->render("views/contractor-register.html");
    }

    /**
     *
     */
    function client()
    {
        $view = new Template();
        echo $view->render("views/client.html");
    }

    /**
     * @param $f3
     */
    function clientRegister($f3)
    {
        var_dump($_SESSION['client']);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // instantiate a validator
            $this->_val = new GcValidator($f3);

            if ($this->_val->validClient()) {
                // get form values
                $company = $_POST['company'];
                $first = $_POST['first'];
                $last = $_POST['last'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $suite = $_POST['suite'];
                $city = $_POST['city'];
                $state = $_POST['state'];
                $zip = $_POST['zip'];

                // instantiate object
                $client = new GcClient($company, $first, $last, $phone, $email, $address, $suite, $city, $state, $zip);

                // put client into session
                $_SESSION['client'] = $client;

                // reroute to client area
                $f3->reroute('views/client');
            }
        } else {
            // Data was not valid
            // Get errors from validator and add to f3 hive
            $this->_f3->set('errors', $this->_val->getErrors());

            // add POST array data to f3 hive for sticky form
            $this->_f3->set('client', $_POST);
        }

        $view = new Template();
        echo $view->render("views/client-register.html");
    }

    /**
     *
     */
    function jobs()
    {
        $view = new Template();
        echo $view->render("views/jobs.html");
    }

    /**
     *
     */
    function login()
    {
        $view = new Template();
        echo $view->render("views/login.html");
    }

}