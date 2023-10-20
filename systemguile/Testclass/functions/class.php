<?php
class AdminClass
{
    private $host = 'localhost';
    private $db   = 'testdb';
    private $user = 'root';
    private $pass = 'IOPiop)_+0-=';
    private $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
    }

    public function LoginAdmin($ladmin, $ladmin_pass) {
        $stmt = $this->conn->prepare("SELECT * FROM tbladmin WHERE ladmin = ? AND ladmin_pass = ?");
    
        $stmt->bind_param('ss', $ladmin, $ladmin_pass);
        $stmt->execute();
        
        $isValid = $stmt->get_result()->num_rows === 1;

        $stmt->close();

        return $isValid;
    }
}
?>
