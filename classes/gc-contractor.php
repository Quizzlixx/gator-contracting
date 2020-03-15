<?php

/**
 * Class GcContractor creates a contractor object to be inserted into the database.
 */
class GcContractor
{
    /**
     * Username for a contractor
     * @var
     */
    private $_username;
    /**
     * First name
     * @var
     */
    private $_first;
    /**
     * Last name
     * @var
     */
    private $_last;
    /**
     * Job title
     * @var
     */
    private $_title;
    /**
     * Email address
     * @var
     */
    private $_email;
    /**
     * Phone number
     * @var
     */
    private $_phone;
    /**
     * Street address
     * @var
     */
    private $_address;
    /**
     * Apartment number OPTIONAL
     * @var
     */
    private $_apt;
    /**
     * City of residence
     * @var
     */
    private $_city;
    /**
     * State of residence
     * @var
     */
    private $_state;
    /**
     * US postal code
     * @var
     */
    private $_zip;

    /**
     * GcContractor constructor.
     * Creates a contractor object
     * @param $_username
     * @param $_first
     * @param $_last
     * @param $_title
     * @param $_email
     * @param $_phone
     * @param $_address
     * @param $_apt
     * @param $_city
     * @param $_state
     * @param $_zip
     */
    public function __construct($_username, $_first, $_last, $_title, $_email, $_phone, $_address, $_apt, $_city, $_state, $_zip)
    {
        $this->_username = $_username;
        $this->_first = $_first;
        $this->_last = $_last;
        $this->_title = $_title;
        $this->_email = $_email;
        $this->_phone = $_phone;
        $this->_address = $_address;
        $this->_apt = $_apt;
        $this->_city = $_city;
        $this->_state = $_state;
        $this->_zip = $_zip;
    }

    /**
     * Gets the username
     * @return mixed
     */
    public function getUsername()
    {
        return $this->_username;
    }

    /**
     * Sets the username
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->_username = $username;
    }

    /**
     * Gets first name
     * @return mixed
     */
    public function getFirst()
    {
        return $this->_first;
    }

    /**
     * Sets first name
     * @param mixed $first
     */
    public function setFirst($first)
    {
        $this->_first = $first;
    }

    /**
     * Get last name
     * @return mixed
     */
    public function getLast()
    {
        return $this->_last;
    }

    /**
     * Set last name
     * @param mixed $last
     */
    public function setLast($last)
    {
        $this->_last = $last;
    }

    /**
     * Get job title
     * @return mixed
     */
    public function getTitle()
    {
        return $this->_title;
    }

    /**
     * Set job title
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->_title = $title;
    }

    /**
     * Get email address
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * Set email address
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }

    /**
     * Get 10 digit phone number
     * @return mixed
     */
    public function getPhone()
    {
        return $this->_phone;
    }

    /**
     * Set 10 digit phone number
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->_phone = $phone;
    }

    /**
     * Get street address
     * @return mixed
     */
    public function getAddress()
    {
        return $this->_address;
    }

    /**
     * Set street address
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->_address = $address;
    }

    /**
     * Get apartment number OPTIONAL
     * @return mixed
     */
    public function getApt()
    {
        return $this->_apt;
    }

    /**
     * Set apartment number OPTIONAL
     * @param mixed $apt
     */
    public function setApt($apt)
    {
        $this->_apt = $apt;
    }

    /**
     * Get city of residence
     * @return mixed
     */
    public function getCity()
    {
        return $this->_city;
    }

    /**
     * Set city of residence
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->_city = $city;
    }

    /**
     * Get state of residence
     * @return mixed
     */
    public function getState()
    {
        return $this->_state;
    }

    /**
     * Set state of residence
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->_state = $state;
    }

    /**
     * Get US postal code
     * @return mixed
     */
    public function getZip()
    {
        return $this->_zip;
    }

    /**
     * Set US postal code
     * @param mixed $zip
     */
    public function setZip($zip)
    {
        $this->_zip = $zip;
    }


}
