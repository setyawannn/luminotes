<?php
require_once __DIR__ . '/../config/database.php';

class User {
    private $db;
    private $table = "users";
    
    public $id;
    public $name;
    public $email;
    public $password;
    public $role;
    
    public function __construct() {
        $this->db = new Database();
    }
    
    public function login($email, $password) {
        $query = "SELECT id, name, email, password, role FROM " . $this->table . " WHERE email = ?";
        
        $stmt = $this->db->conn->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            
            if (password_verify($password, $user['password'])) {
                $this->id = $user['id'];
                $this->name = $user['name'];
                $this->email = $user['email'];
                $this->role = $user['role'];
                
                return true;
            }
        }
        
        return false;
    }
    
    public function emailExists($email) {
        $query = "SELECT id FROM " . $this->table . " WHERE email = ?";
        
        $stmt = $this->db->conn->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        return $result->num_rows > 0;
    }
    
    public function create() {
        $query = "INSERT INTO " . $this->table . " (name, email, password, role) VALUES (?, ?, ?, ?)";
        
        $stmt = $this->db->conn->prepare($query);
        $stmt->bind_param("ssss", $this->name, $this->email, $this->password, $this->role);
        
        if ($stmt->execute()) {
            $this->id = $this->db->conn->insert_id;
            return true;
        }
        
        return false;
    }
    
    public function getUserById($id) {
        $query = "SELECT id, name, email, role FROM " . $this->table . " WHERE id = ?";
        
        $stmt = $this->db->conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            
            $this->id = $user['id'];
            $this->name = $user['name'];
            $this->email = $user['email'];
            $this->role = $user['role'];
            
            return true;
        }
        
        return false;
    }
    
    public function adminExists() {
        $query = "SELECT id FROM " . $this->table . " WHERE role = 'admin' LIMIT 1";
        
        $result = $this->db->conn->query($query);
        
        return $result->num_rows > 0;
    }
}