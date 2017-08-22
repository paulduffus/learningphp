<?php

class connect_database {

    /**
     * define your class properties here
     */
    public $creds = array(
        'host' => 'localhost',
        'user' => 'root',
        'password' => 'root',
        'db' => 'sites_php'
    );

    public $conn;

    /**
     * end class properties
     */

    /**
     * The __construct function is the first method called when ever a class is instantiated
     * We use the construct in order to use the credentials to connect to the database
     * @param $creds
     */
    public function __construct($creds = array()){

        $creds = array_merge($this->creds, $creds);

        $this->conn = mysqli_connect($creds['host'], $creds['user'], $creds['password'], $creds['db']);
    }

    /**
     * We use the existing connection to the database in order to query to bring back records
     * @param string $query
     * @return bool|mysqli_result
     */
    public function query($query)
    {
        return $this->conn->query($query);
    }

    /**
     * Once the database has been queried we need to create an array of database information
     * we return these rows
     * @param $query
     * @return array
     */
    public function fetchRows($query)
    {
        $result = $this->query($query);

        $users = array();

        while($row = $result->fetch_assoc()) {

            $users[] = $row;
        }

        return $users;
    }

    /**
     * Finally we close the connection when instructed
     */
    public function close()
    {
        $this->conn->close();
    }
}