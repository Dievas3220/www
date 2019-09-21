<?php


class DatabaseConnection
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "mysql";

    public function connect()
    {
        $conn = new mysqli($this->servername, $this->username, $this->password);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);

        }

        return $conn;
    }
}