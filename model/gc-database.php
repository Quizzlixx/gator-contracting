<?php
// Requires
require_once('/home/klowgree/config-dating.php');

class GcDatabase
{
    // PDO object
    private $_dbh;

    /**
     * GcDatabase constructor.
     * Creates a database object that connects to the db
     */
    function __construct()
    {
        try {
            // create a new PDO connection
            $this->_dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            echo "Connected!";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Contractor registration
     */
    function insertContractor($contractor)
    {
        // define query
        $sql = "INSERT INTO contractor(`first`, `last`, `title`, `email`, `phone`, `address`, `apt`, `city`, `state`, 
                                        `zip`)
                VALUES(:first, :last, :title, :email, :phone, :address, :apt, :city, :state, :zip)";

        // prepare statement
        $statement = $this->_dbh->prepare($sql);

        // bind params
        $statement->bindParam(':first', $contractor->getFirst());
        $statement->bindParam(':last', $contractor->getLast());
        $statement->bindParam(':title', $contractor->getTitle());
        $statement->bindParam(':email', $contractor->getEmail());
        $statement->bindParam(':phone', $contractor->getPhone());
        $statement->bindParam(':address', $contractor->getAddress());
        $statement->bindParam(':apt', $contractor->getApt());
        $statement->bindParam(':city', $contractor->getCity());
        $statement->bindParam(':state', $contractor->getState());
        $statement->bindParam(':zip', $contractor->getZip());

        // execute statement
        $statement->execute();

        // get results
        # no results
    }

    /**
     * Client registration
     */
    function insertClient($client)
    {

    }

    /**
     * Allows a client to post jobs
     */
    function insertJob($job)
    {

    }

    /**
     * TODO: Gets a single job for search functionality
     */
    function getJob($jobNumber)
    {
        // define query
        $sql = "SELECT * FROM job
                WHERE job_id = :jobID";

        // prepare statement
        $statement = $this->_dbh->prepare($sql);

        // bind params
        $statement->bindParam(":jobID", $jobNumber);

        // execute statement
        $statement->execute();

        // return results
        return $statement->fetchAll(PDO::FETCH_ASSOC);

    }

    /**
     * Gets a list of jobs on the job panel
     */
    function getJobs()
    {
        // Define query
        $sql = "SELECT * FROM job";

        // prepare statement
        $statement = $this->_dbh->prepare($sql);

        // bind params
        # no params to bind

        // execute statement
        $statement->execute();

        // return results
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
