<?php

class DatabaseConnection
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "mysql";
    private $database = "doctor";

    public function connect()
    {
        $conn = new mysqli($this->servername, $this->username, $this->password);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "USE " . $this->database;
        $conn->query($sql);
        return $conn;
    }
}
