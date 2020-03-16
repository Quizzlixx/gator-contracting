<?php

/**
 * Class Routes This file displays the routes the website will use for navigation.
 */
class Routes
{
    /**
     * a private instance of the fat free framework variable to use F3 functionality
     * @var
     */
    private $_f3;
    /**
     * a private instance of the validator variable
     * @var
     */
    private $_val;

    /**
     * Routes constructor that takes the f3 parameter for fat free framework functionality
     * @param $f3
     */
    function __construct($f3)
    {
        $this->_f3 = $f3;
    }

    /**
     * Home route where users will be directed to first.
     */
    function home()
    {
        $view = new Template();
        echo $view->render("views/home.html");
    }

    /**
     * Contractor route. Displays a list of all contractors registered in the database
     */
    function contractor()
    {
        $contractors = $GLOBALS['db']->getContractors();
        $this->_f3->set('contractors', $contractors);

        $view = new Template();
        echo $view->render("views/contractor.html");
    }

    /**
     * Registration page for potential contract employees. Validates a contractor object, inserts it into the session array
     * and database. Else, it will display what the user needs to do to correctly validate the form.
     * @param $f3
     */
    function contractorRegister($f3)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->_val = new GcValidator($f3);

            if ($this->_val->validContractor()) {
                $username = $_POST['username'];
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

                $contractor = new GcContractor($username, $first, $last, $title, $email, $phone, $address, $apt, $city, $state, $zip);
//                var_dump($contractor);

                $_SESSION['contractor'] = $contractor;

                $GLOBALS['db']->insertContractor($contractor);

                $f3->reroute('/contractor');

//                var_dump($_SESSION['contractor']);

                $_SESSION = array();
            } else {
                $this->_f3->set('errors', $this->_val->getGErrors());

                $this->_f3->set('contractor', $_POST);
            }
        }
        $view = new Template();
        echo $view->render("views/contractor-register.html");
    }

    /**
     * Displays a list of clients registered in the database.
     */
    function client()
    {
        $clients = $GLOBALS['db']->getClients();
        $this->_f3->set('clients', $clients);

        $view = new Template();
        echo $view->render("views/client.html");
    }

    /**
     * Registration page for potential contract employees. Validates a client object, inserts it into the session array
     * and database. Else, it will display what the user needs to do to correctly validate the form.
     * @param $f3
     */
    function clientRegister($f3)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // instantiate a validator
            $this->_val = new GcValidator($f3);

            if ($this->_val->validClient()) {
                // get form values
                $username = $_POST['username'];
                $company = $_POST['company'];
                $first = $_POST['first'];
                $last = $_POST['last'];
                $title = "";
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $suite = $_POST['suite'];
                $city = $_POST['city'];
                $state = $_POST['state'];
                $zip = $_POST['zip'];

                // instantiate object
                $client = new GcClient($username, $first, $last, $title, $phone, $email, $address, $suite, $city, $state, $zip);
                $client->setCompany($company);

                // put client into session
                $_SESSION['client'] = $client;

                $GLOBALS['db']->insertClient($client);

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
}