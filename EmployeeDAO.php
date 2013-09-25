<?php
class EmployeeDAO {
    private $read_emps = "select * from employee";
    private $db;
    
    function __construct() {
        $this -> db = new DatabaseController();
    }
    
    function getDb() {
        return $this -> db;
    }
    
    function readEmployees() {
        
    }
}
?>
