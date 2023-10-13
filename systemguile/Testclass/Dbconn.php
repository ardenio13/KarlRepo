<?php
class DbMgmtConnClass
{
    public $conn; // A public variable to store the database connection

    public function __construct()
    {
        // Constructor method that initializes the database connection
        if (!$this->ConDB()) {
            die("Database connection error: " . $this->conn->connect_error);
        }
    }

    private function ConDB()
    {
        // Private method to establish a database connection
        $servername = "localhost"; // Server name or IP address where the database is hosted
        $username = "root"; // Database username
        $password = "IOPiop)_+0-="; // Database password
        $dbname = "dbaccount"; // Name of the database

        // Create a new MySQLi database connection with error handling
        $this->conn = new mysqli($servername, $username, $password, $dbname);

        return !$this->conn->connect_error;
    }

    public function login($ladmin, $ladmin_pass)
    {
        // Public method to check if a user can log in based on provided user and password
        $query = "SELECT * FROM tbladmin WHERE ladmin = ? AND ladmin_pass = ?";
        $stmt = $this->conn->prepare($query); // Prepare a SQL query statement

        // Bind the provided luser and password as parameters to the query
        $stmt->bind_param('ss', $ladmin, $ladmin_pass);

        // Execute the query
        $stmt->execute();

        // Get the result
        $result = $stmt->get_result();

        // Return true if login was successful, false otherwise
        return $result->num_rows === 1;
    }
}  
?>  