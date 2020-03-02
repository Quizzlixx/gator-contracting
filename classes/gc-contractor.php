<?php

/**
 * Class GcContractor
 */
class GcContractor
{
    /**
     * @var
     */
    private $_username;
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
    private $_title;
    /**
     * @var
     */
    private $_email;
    /**
     * @var
     */
    private $_phone;
    /**
     * @var
     */
    private $_address;
    /**
     * @var
     */
    private $_apt;
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
     * GcContractor constructor.
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
    public function getTitle()
    {
        return $this->_title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->_title = $title;
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
    public function getApt()
    {
        return $this->_apt;
    }

    /**
     * @param mixed $apt
     */
    public function setApt($apt)
    {
        $this->_apt = $apt;
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
