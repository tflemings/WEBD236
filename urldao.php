<?php
include 'DatabaseController.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


function readTopFive() {
    $database = new DatabaseController("mysql");
    $dbh = $database -> getDbh();
    $sth = $dbh -> prepare("select * from url order by click_count desc limit 5");
    $sth -> execute();
    $result = $sth -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
?>
