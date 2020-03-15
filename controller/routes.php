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
        echo "<br>";
        echo "POST" . var_dump($_POST) . "<br>";
        echo "SESSION" . var_dump($_SESSION) . "<br>";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->_val = new GcValidator($f3);

            if ($this->_val->validContractor()) {
                $first = $_POST['first'];
                $last = $_POST['last'];
                $title = $_POST['title'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $apt = $_POST['apt'];
                $city = $_POST['city'];
                $state = $_POST['state'];
                $zip = $_POST['zip'];

                $contractor = new GcContractor($first, $last, $title, $email, $phone, $address, $apt, $city, $state, $zip);
                var_dump($contractor);

                $_SESSION['contractor'] = $contractor;

                $f3->reroute('/contractor');
                var_dump($_SESSION['contractor']);
                $_SESSION = array();
            }
            else {
                $this->_f3->set('errors', $this->_val->getGErrors());

                $this->_f3->set('contractor', $_POST);
            }
        }
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
        echo "POST" . var_dump($_POST) . "<br>";
        echo "SESSION" . var_dump($_SESSION) . "<br>";

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
                $f3->reroute('/client');

                // unset session variable
                $_SESSION = array();
            } else {
                // Data was not valid
                // Get errors from validator and add to f3 hive
                $this->_f3->set('errors', $this->_val->getGErrors());

                // add POST array data to f3 hive for sticky form
                $this->_f3->set('client', $_POST);
            }
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