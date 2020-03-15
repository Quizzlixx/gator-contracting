<?php
// Requires
require_once('../../../config.php');

/**
 * Class GcDatabase connects to the database to perform CRUD functions.
 */
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
//            echo "Connected!";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Contractor registration takes a contractor object and inserts it into the database.
     * @param $contractor
     */
    function insertContractor($contractor)
    {
        // define query
        $sql = "INSERT INTO contractor(`first`, `last`, `title`, `email`, `phone`, `address`, `apt`, `city`, `state`, 
                                        `zip`)
                VALUES(:first, :last, :title, :email, :phone, :address, :suite, :city, :state, :zip)";

        // prepare statement
        $statement = $this->_dbh->prepare($sql);

        // bind params
        $statement->bindParam(':first', $contractor->getFirst());
        $statement->bindParam(':last', $contractor->getLast());
        $statement->bindParam(':title', $contractor->getTitle());
        $statement->bindParam(':email', $contractor->getEmail());
        $statement->bindParam(':phone', $contractor->getPhone());
        $statement->bindParam(':address', $contractor->getAddress());
        $statement->bindParam(':suite', $contractor->getApt());
        $statement->bindParam(':city', $contractor->getCity());
        $statement->bindParam(':state', $contractor->getState());
        $statement->bindParam(':zip', $contractor->getZip());

        // execute statement
        $statement->execute();

        // get results
        # no results to return
    }

    /**
     * Client registration takes a client object and inserts it into the database
     * @param $client
     */
    function insertClient($client)
    {
        // define query
        $sql = "INSERT INTO client(`company`, `first`, `last`, `title`, `email`, `phone`, `address`, `apt`, `city`, `state`, 
                                        `zip`)
                VALUES(:company, :first, :last, :title, :email, :phone, :address, :apt, :city, :state, :zip)";

        // prepare statement
        $statement = $this->_dbh->prepare($sql);

        // bind params
        $statement->bindParam(':company', $client->getCompany());
        $statement->bindParam(':first', $client->getFirst());
        $statement->bindParam(':last', $client->getLast());
        $statement->bindParam(':title', $client->getTitle());
        $statement->bindParam(':email', $client->getEmail());
        $statement->bindParam(':phone', $client->getPhone());
        $statement->bindParam(':address', $client->getAddress());
        $statement->bindParam(':apt', $client->getApt());
        $statement->bindParam(':city', $client->getCity());
        $statement->bindParam(':state', $client->getState());
        $statement->bindParam(':zip', $client->getZip());

        // execute statement
        $statement->execute();

        // get results
        # no results to return

        echo "success";
    }

    /**
     * Takes a job object and inserts it into the database
     * @param $job
     */
    function insertJob($job)
    {
        // define query
        $sql = "INSERT INTO job(`title`, `description`, `salary`, `duration`, `start`, `client_id`)
                VALUES (:title, :description, :salary, :duration, :start, :client)";

        // prepare statement
        $statement = $this->_dbh->prepare($sql);

        // bind params
        $statement->bindParam(':title', $job->getTitle());
        $statement->bindParam(':description', $job->getDescription());
        $statement->bindParam(':salary', $job->getSalary());
        $statement->bindParam(':duration', $job->getDuration());
        $statement->bindParam(':start', $job->getStart());
        $statement->bindParam(':client', $job->getClient());

        // execute statement
        $statement->execute();

        // return results
        # no results to return
    }

    /**
     * TODO: Gets all the jobs that match the job title
     * Queries the database for a job title
     * @param $jobTitle
     * @return array
     */
    function getJob($jobTitle)
    {
        // define query
        $sql = "SELECT * FROM job
                WHERE job.title = :title";

        // prepare statement
        $statement = $this->_dbh->prepare($sql);

        // bind params
        $statement->bindParam(":title", $jobTitle);

        // execute statement
        $statement->execute();

        // return results
        return $statement->fetchAll(PDO::FETCH_ASSOC);

    }

    /**
     * Queries the database for all jobs without contractors attached.
     */
    function getJobs()
    {
        // Define query
        $sql = "SELECT * FROM job
                WHERE job.contractor_id = NULL";

        // prepare statement
        $statement = $this->_dbh->prepare($sql);

        // bind params
        # no params to bind

        // execute statement
        $statement->execute();

        // return results
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Queries the database to see if a username is taken
     *
     * @param $username
     * @return array
     */
    function queryUsername($username)
    {
        $sql = "SELECT contractor.username, client.username
                    FROM contractor, client
                    WHERE contractor.username =  OR client.username = ";

        $statement = $this->_dbh->prepare($sql);

        $statement->bindParam(":username", $username);

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
