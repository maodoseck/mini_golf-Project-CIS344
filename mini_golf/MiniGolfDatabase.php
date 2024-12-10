<?php
class MiniGolfDatabase {
    private $conn;

    public function __construct() {
        $this->conn = new mysqli('localhost', 'root', 'Meloinny07!', 'mini_golf_reservations');
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function query($sql, $params = []) {
        $stmt = $this->conn->prepare($sql);
        if ($params) {
            $types = str_repeat('s', count($params));
            $stmt->bind_param($types, ...$params);
        }
        $stmt->execute();
        return $stmt->get_result();
    }
}
?>