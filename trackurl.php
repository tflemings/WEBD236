<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
if (!isset($_POST['url']) || !isset($_POST['nickname']) || 
        $_POST['url'] == '' || $_POST['nickname'] == '') { ?>
    <script type="text/javascript">location.href = 'index.php?selected=1&page=home';</script> <?php
} else {
    
}
?>
