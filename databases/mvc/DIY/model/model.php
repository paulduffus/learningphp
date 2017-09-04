<?php

class Model
{
    private $_conn;

    private $_defaults = array(
        'database' => 'sites_php',
        'user' => 'root',
        'password' => 'root',
        'host' => 'localhost');

    private $_state = array(
        'name' => '',
        'username' => '',
        'email' => '',
        'password' => ''
    );

    /**
     * This is where we configure our db connection.
     * configuration can be passed in to change the default values given above
     * __construct functions always get parsed first
     * @param array $config
     */
    public function __construct($config = array())
    {
        $config = (object)array_merge($this->_defaults, $config);

        $this->_conn = mysqli_connect($config->host, $config->user, $config->password, $config->database);
    }

    public function setState($request)
    {
        $query_id = $request->query->filter('id', '', FILTER_SANITIZE_NUMBER_INT);
        $id = mysqli_real_escape_string($this->_conn, $query_id);

        foreach($this->_state as $key => $value)
        {
            $value = $request->request->filter($key, '');
            $this->_state[$key] =  mysqli_real_escape_string($this->_conn, $value);
        }

        $this->_state['id'] = $id;
    }
}