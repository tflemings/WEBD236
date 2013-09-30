<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'urldao.php';
include_once 'view_trackurl.php';
$nickname = $_REQUEST['name'];
incrementCount($nickname);
$record = readUrlByNickname($nickname);
if (count($record) == 0) {
    pageNotFound();
} else {
    $url = $record[0]['url']; ?>
    <script type="text/javascript">location.href = 'goto.php?url=<?php echo $url; ?>';</script> <?php
}

?>
