<?php
/**
 * Written by Tony Flemings
 */
class DatabaseController {
    private $dbh;
    
    function __construct() {
        try{
            $this -> dbh = new PDO('sqlite:db/MicroUniversity.db3');
        } catch(PDOException $e) {
            error_page("Database Error: $e");
        }
        
    }
    
    function getDbh() {
        return $this -> dbh;
    }
}
?>
