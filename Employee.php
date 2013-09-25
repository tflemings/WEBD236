<?php
class Employee {
    private $id;
    private $fname;
    private $lname;
    private $initial;
    private $jobcode;
    private $hiredate;
    private $dob;
    
    function __construct() {
        
    }
    
    function getId() {
        return $this -> id;
    }
    
    function setId($id) {
        $this -> id = $id;
    }
    
    function getFname() {
        return $this -> fname;
    }
    
    function setFname($fname) {
        $this -> fname = $fname;
    }
    
    function getLname() {
        return $this -> lname;
    }
    
    function setLname($lname) {
        $this -> lname = lname;
    }
    
    function getInitial() {
        return $this -> initial;
    }
    
    function setInitial($initial) {
        $this -> initial = $initial;
    }
    
    function getJobcode() {
        return $this -> jobcode;
    }
    
    function setJobcode($jobcode) {
        $this -> jobcode = $jobcode;
    }
    
    function getHiredate() {
        return $this -> hiredate;
    }
    
    function setHiredate($hiredate) {
        $this -> hiredate = $hiredate;
    }
    
    function getDob() {
        return $this -> dob;
    }
    
    function setDob($dob) {
        $this -> dob = $dob;
    }
    
    function getFullName() {
        return $this -> fname . ' ' . $this -> lname;
    }
}
?>
