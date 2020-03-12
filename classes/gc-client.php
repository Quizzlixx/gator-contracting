<?php

/**
 * Class GcClient: This class adds the _company field to keep track of what company this person
 * for.
 */
class GcClient extends GcContractor
{
    /**
     * Tracks the company the person works for
     * @var
     */
    private $_company;

    /**
     * Returns the name of the company
     * @return mixed
     */
    public function getCompany()
    {
        return $this->_company;
    }

    /**
     * Sets the name of the company
     * @param mixed $company
     */
    public function setCompany($company)
    {
        $this->_company = $company;
    }

}
