<?php

class connect_database
{
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

    public function __construct($creds = array()){

        $creds = array_merge($this->creds, $creds);

        $this->conn = mysqli_connect($creds['host'], $creds['user'], $creds['password'], $creds['db']);
    }
}