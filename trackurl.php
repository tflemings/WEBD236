<?php
include_once 'urldao.php';
include_once 'view_trackurl.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$submitted_url = $_POST['url'];
$submitted_nickname = $_POST['nickname'];
if ($submitted_url == '' || $submitted_nickname == '') { ?>
    <script type="text/javascript">location.href = 'lab01.php?selected=1&page=l01';</script> <?php
} else {
    $url_array = explode("http://", $submitted_url);
    $url = '';
    if (count($url_array) == 1) {
        $url = "http://" . $url_array[0];
    } else {
        $url = $submitted_url;
    }
    $nickname = $submitted_nickname;
    $existing_record = readUrlByNickname($nickname);
    if (count($existing_record) == 0) {
        insertUrl($url, $nickname);
        view_added_site($url, $nickname);
    } elseif (count($existing_record == 1)) {
        view_added_site($existing_record[0]['url'], $existing_record[0]['nickname']);
    }
}

?>
