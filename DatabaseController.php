<?php
/**
 * Written by Tony Flemings
 */
class DatabaseController {
    private $dbh;
    
    function __construct($db_type) {
        if ($db_type == 'sqlite') {
            try{
                $this -> dbh = new PDO('sqlite:db/MicroUniversity.db3');
            } catch(PDOException $e) {
                error_page("$db_type error: $e");
            }
        } elseif ($db_type == 'mysql') {
            try{
                $this -> dbh = new PDO('mysql:host=ds01.mlbfan.org;dbname=webd236', 'ssharkey', 'lanshark01');
            } catch(PDOException $e) {
                error_page("$db_type error: $e");
            }
        } else {
            error_page("Could not connect to $db_type database.");
        }
        
        
    }
    
    function getDbh() {
        return $this -> dbh;
    }
}
?>
