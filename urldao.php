<?php
include 'DatabaseController.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$database = new DatabaseController("mysql");
$dbh = $database -> getDbh();

function readTopFive() {
    global $dbh;
    $sth = $dbh -> prepare("select * from url order by click_count desc limit 5");
    $sth -> execute();
    $result = $sth -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function readUrlByNickname($nickname) {
    global $dbh;
    $sth = $dbh -> prepare("select * from url where lower(nickname) = ?");
    $sth -> bindParam(1, strtolower($nickname));
    $sth -> execute();
    $result = $sth -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function insertUrl($url, $nickname) {
    global $dbh;
    $count = 0;
    $sth = $dbh -> prepare("insert into url (url, nickname, click_count) values (?, ?, ?)");
    $sth -> bindParam(1, $url);
    $sth -> bindParam(2, $nickname);
    $sth -> bindParam(3, $count, PDO::PARAM_INT);
    $sth -> execute();
}

function incrementCount($nickname) {
    global $dbh;
    $sth = $dbh -> prepare("update url set click_count = click_count + 1 where nickname = ?");
    $sth -> bindParam(1, $nickname);
    $sth -> execute();
}
?>
