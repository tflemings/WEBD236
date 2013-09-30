<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function view_added_site($url, $nickname) {
    include 'templates.inc';
    main_header("Confirmation"); ?>
    <p><?php echo $url; ?> nicknamed to 
        http://127.0.0.1/WEBD236/view_site.php?name=<?php echo $nickname ?>
    </p> <?php
    main_footer();
}

function pageNotFound() {
    include 'templates.inc';
    main_header("Not Found"); ?>
    <p>No such URL found</p> <?php
    main_footer();
}
?>
