<?php

/**
 * Class GcClient
 */
class GcClient
{
    /**
     * @var
     */
    private $_username;
    /**
     * @var
     */
    private $_company;
    /**
     * @var
     */
    private $_first;
    /**
     * @var
     */
    private $_last;
    /**
     * @var
     */
    private $_phone;
    /**
     * @var
     */
    private $_email;
    /**
     * @var
     */
    private $_address;
    /**
     * @var
     */
    private $_suite;
    /**
     * @var
     */
    private $_city;
    /**
     * @var
     */
    private $_state;
    /**
     * @var
     */
    private $_zip;

    /**
     * GcClient constructor.
     * @param $_username
     * @param $_company
     * @param $_first
     * @param $_last
     * @param $_phone
     * @param $_email
     * @param $_address
     * @param $_suite
     * @param $_city
     * @param $_state
     * @param $_zip
     */
    public function __construct($_username, $_company, $_first, $_last, $_phone, $_email, $_address, $_suite, $_city, $_state, $_zip)
    {
        $this->_username = $_username;
        $this->_company = $_company;
        $this->_first = $_first;
        $this->_last = $_last;
        $this->_phone = $_phone;
        $this->_email = $_email;
        $this->_address = $_address;
        $this->_suite = $_suite;
        $this->_city = $_city;
        $this->_state = $_state;
        $this->_zip = $_zip;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->_username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->_username = $username;
    }

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->_company;
    }

    /**
     * @param mixed $company
     */
    public function setCompany($company)
    {
        $this->_company = $company;
    }

    /**
     * @return mixed
     */
    public function getFirst()
    {
        return $this->_first;
    }

    /**
     * @param mixed $first
     */
    public function setFirst($first)
    {
        $this->_first = $first;
    }

    /**
     * @return mixed
     */
    public function getLast()
    {
        return $this->_last;
    }

    /**
     * @param mixed $last
     */
    public function setLast($last)
    {
        $this->_last = $last;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->_phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->_phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->_address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->_address = $address;
    }

    /**
     * @return mixed
     */
    public function getSuite()
    {
        return $this->_suite;
    }

    /**
     * @param mixed $suite
     */
    public function setSuite($suite)
    {
        $this->_suite = $suite;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->_city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->_city = $city;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->_state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->_state = $state;
    }

    /**
     * @return mixed
     */
    public function getZip()
    {
        return $this->_zip;
    }

    /**
     * @param mixed $zip
     */
    public function setZip($zip)
    {
        $this->_zip = $zip;
    }
}
