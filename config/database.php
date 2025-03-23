<?php

require_once __DIR__ . '/config.php';

// Konfigurasi database
class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "luminotes";
    public $conn;
    
    // Constructor untuk membuat koneksi
    public function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
        
        // Cek koneksi
        if ($this->conn->connect_error) {
            die("Koneksi database gagal: " . $this->conn->connect_error);
        }
        
        // Set charset
        $this->conn->set_charset("utf8");
    }
    
    // Method untuk menutup koneksi
    public function closeConnection() {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}