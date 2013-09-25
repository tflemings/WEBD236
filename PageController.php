<?php
$page = $_POST['page'];
switch ($page) {
    case "home": ?>
        <script type="text/javascript">location.href = 'index.php?selected=1&page=home';</script> <?php
        break;
    case "h01": ?>
        <script type="text/javascript">location.href = 'homework01.php?selected=1&page=h01';</script> <?php
        break;
    case "fizzbuzz": ?>
        <script type="text/javascript">location.href = 'fizzbuzz.php?selected=1&page=h01';</script> <?php
        break;
    case "h02": ?>
        <script type="text/javascript">location.href = 'homework02.php?selected=1&page=h02';</script> <?php
        break;
    default: ?>
        <script type="text/javascript">location.href = 'incomplete.php?selected=1&page=none';</script> <?php
        break;
        
}
?>
