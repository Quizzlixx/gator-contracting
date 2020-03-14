<?php

/**
 * Class GcValidator
 */
class GcValidator
{
    /**
     * @var
     */
    private $_f3;
    /**
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
     * @return array
     */
    public function getGErrors()
    {
        return $this->_errors;
    }

    /**
     * Checks whether the personal information form is valid
     *
     * @return bool
     */
    public function validClient()
    {
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

    public function validContractor()
    {
        $this->validFirst($_POST['first']);
        $this->validLast($_POST['last']);
        $this->validTitle($_POST['title']);
        $this->validEmail($_POST['email']);
        $this->validPhone($_POST['phone']);
        $this->validAddress($_POST['address']);
        $this->validApt($_POST['apt']);
        $this->validCity($_POST['city']);
        $this->validZip($_POST['zip']);

        return empty($this->_errors);
    }
//    public function validUsername($username)
//    {
//        if (empty(trim($username))) {
//            $this->_errors['company'] = "Username is required.";
//        }
//    }

    /**
     * @param $company
     */
    public function validCompany($company)
    {
        if (empty(trim($company))) {
            $this->_errors['company'] = "Company name is required.";
        }
    }


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
     * @param $email
     */
    public function validEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->_errors['email'] = "Valid email is required: email@example.com";
        }
    }

    /**
     * @param $address
     */
    public function validAddress($address)
    {
        if (empty($address)) {
            $this->_errors['address'] = "Please enter an address.";
        }
    }

    public function validApt($apt)
    {
        if (empty($apt)) {
            $this->_errors['apt'] = "please enter a apt.";
        }
    }

    /**
     * @param $city
     */
    public function validCity($city)
    {
        if (empty($city)) {
            $this->_errors['city'] = "Please enter a city.";
        }
    }

    /**
     * @param $zip
     */
    public function validZip($zip)
    {
        if (!preg_match('/^(\d{5})$|^(\d{5}-\d{4})$/', $zip)) {
            $this->_errors['zip'] = "Valid zip code is required: XXXXX OR XXXXX-XXXX";
        }
//        if (empty($zip)) {
//            $this->_errors['zip'] = "Please enter a zip code.";
//        }
    }
}
