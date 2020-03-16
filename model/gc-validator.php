<?php

/**
 * Class GcValidator validates the data given on the client and contractor forms. This will return an array of errors if
 * the forms are invalid.
 */
class GcValidator
{
    /**
     * F3 variable
     * @var
     */
    private $_f3;
    /**
     * Error array to capture if data is not valid
     * @var array
     */
    private $_errors;

    /**
     * GcValidator constructor.
     * @param $f3
     */
    public function __construct($f3)
    {
        $this->_f3 = $f3;
        $this->_errors = array();
    }

    /**
     * If there are errors, the form is not valid
     * @return array
     */
    public function getGErrors()
    {
        return $this->_errors;
    }

    /**
     * Checks whether the client information form is valid by returning the error array if it is not empty
     *
     * @return bool
     */
    public function validClient()
    {
        $this->validUsername($_POST['username']);
        $this->validCompany($_POST['company']);
        $this->validFirst($_POST['first']);
        $this->validLast($_POST['last']);
        $this->validPhone($_POST['phone']);
        $this->validEmail($_POST['email']);
        $this->validAddress($_POST['address']);
        $this->validCity($_POST['city']);
        $this->validZip($_POST['zip']);

        // if the $_errors array is empty, then we have valid data
        return empty($this->_errors);
    }

    /**
     * Checks whether the contractor information form is valid by returning the error array if it is not empty
     * @return bool
     */
    public function validContractor()
    {
        $this->validUsername($_POST['username']);
        $this->validFirst($_POST['first']);
        $this->validLast($_POST['last']);
        $this->validTitle($_POST['title']);
        $this->validEmail($_POST['email']);
        $this->validPhone($_POST['phone']);
        $this->validAddress($_POST['address']);
        $this->validCity($_POST['city']);
        $this->validZip($_POST['zip']);

        return empty($this->_errors);
    }

    /**
     * Checks to see if the username is empty.
     * If the username is not empty, query the database to see if the username exists. If it does, notify the user that
     * the username is already taken.
     * @param $username
     */
    public function validUsername($username)
    {
        if (empty(trim($username))) {
            $this->_errors['username'] = "Please enter a username.";
        } else {
            $user = $GLOBALS['db']->queryUsername($username);
            if ($user) {
                $this->_errors['username'] = "That username is already taken";
            }
        }
    }

    /**
     * Checks to see if the company field is empty.
     * @param $company
     */
    public function validCompany($company)
    {
        if (empty(trim($company))) {
            $this->_errors['company'] = "Company name is required.";
        }
    }


    /**
     * Checks to see if the job title field is empty
     * @param $title
     */
    public function validTitle($title)
    {
        if (empty(trim($title))) {
            $this->_errors['title'] = "Contractor title is required.";
        }
    }

    /**
     * Takes a variable and returns true if it is not empty and contains only letters
     *
     * @param $first
     * @return void
     */
    public function validFirst($first)
    {
        // first name is required
        if (empty(trim($first))) {
            $this->_errors['first'] = "First name is required.";
        }
    }


    /**
     * Takes a variable and returns true if it is not empty and contains only letters
     *
     * @param $last
     * @return void
     */
    public function validLast($last)
    {
        // last name is required
        if (empty(trim($last))) {
            $this->_errors['last'] = "Last name is required.";
        }
    }

    /**
     * Checks to see if the phone number format matches the regular expression
     * @param $number
     * @return void
     */
    public function validPhone($number)
    {
        if (!preg_match('/^(\d{3})\-?(\d{3})\-?(\d{4})$/', $number)) {
            $this->_errors['phone'] = "Valid 10 digit phone number is required: xxx-xxx-xxxx";
        }
    }

    /**
     * Checks to see if the email field matches the valid email filter
     * @param $email
     */
    public function validEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->_errors['email'] = "Valid email is required: email@example.com";
        }
    }

    /**
     * Checks to see if  the address field is empty
     * @param $address
     */
    public function validAddress($address)
    {
        if (empty($address)) {
            $this->_errors['address'] = "Please enter an address.";
        }
    }

    /**
     * Checks to see if the city field is empty
     * @param $city
     */
    public function validCity($city)
    {
        if (empty($city)) {
            $this->_errors['city'] = "Please enter a city.";
        }
    }

    /**
     * Checks the regular expression to see if the zip code field is correct
     * @param $zip
     */
    public function validZip($zip)
    {
        if (!preg_match('/^(\d{5})$|^(\d{5}-\d{4})$/', $zip)) {
            $this->_errors['zip'] = "Valid zip code is required: XXXXX OR XXXXX-XXXX";
        }
    }
}
