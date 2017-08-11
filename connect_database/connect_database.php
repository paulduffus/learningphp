<?php

class connect_database {

    public function __construct($creds){

        $this->conn = mysqli_connect($creds['host'], $creds['user'], $creds['password'], $creds['db']);
    }


    public function query_db($query)
    {
        $result = $this->conn->query($query);

        $users = array();

        while($row = $result->fetch_assoc()) {

            $users[] = $row;
        }

        return $users;

    }

    public function close_connection()
    {
        $this->conn->close();
    }
}