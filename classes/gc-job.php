<?php

/**
 * Class GcJob creates a job object to be inserted into the database
 */
class GcJob
{
    /**
     * Job title
     * @var
     */
    private $_title;
    /**
     * Job description
     * @var
     */
    private $_description;
    /**
     * Salary: Hourly or lump sum
     * @var
     */
    private $_salary;
    /**
     * The company or entity looking to fill positions
     * @var
     */
    private $_client;
    /**
     * How long the job will be
     * @var
     */
    private $_duration;
    /**
     * The expected start date of the job
     * @var
     */
    private $_start;

    /**
     * GcJob constructor.
     * @param $_title
     * @param $_description
     * @param $_salary
     * @param $_client
     * @param $_duration
     * @param $_start
     */
    public function __construct($_title, $_description, $_salary, $_client, $_duration, $_start)
    {
        $this->_title = $_title;
        $this->_description = $_description;
        $this->_salary = $_salary;
        $this->_client = $_client;
        $this->_duration = $_duration;
        $this->_start = $_start;
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
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->_description = $description;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->_salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary)
    {
        $this->_salary = $salary;
    }

    /**
     * @return mixed
     */
    public function getClient()
    {
        return $this->_client;
    }

    /**
     * @param mixed $client
     */
    public function setClient($client)
    {
        $this->_client = $client;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->_duration;
    }

    /**
     * @param mixed $duration
     */
    public function setDuration($duration)
    {
        $this->_duration = $duration;
    }

    /**
     * @return mixed
     */
    public function getStart()
    {
        return $this->_start;
    }

    /**
     * @param mixed $start
     */
    public function setStart($start)
    {
        $this->_start = $start;
    }
}
