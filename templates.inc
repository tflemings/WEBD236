<?php
function main_header($title) { 
$pages = array("home" => "Home",
               "h01" => "FizzBuzz",
               "h02" => "Employees",
               "h03" => "Homework 3",
               "h04" => "Homework 4",
               "h05" => "Homework 5",
               "h06" => "Homework 6",
               "h07" => "Homework 7",
               "h08" => "Homework 8",
               "h09" => "Homework 9",
               "h10" => "Homework 10",
               "h11" => "Homework 11",
               "h12" => "Homework 12",
               "l01" => "Lab 1",
               "l02" => "Lab 2",
               "l03" => "Lab 3",
               "l04" => "Lab 4",
               "l05" => "Lab 5");
?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
            <link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
            <link href='css/style.css' rel='stylesheet' type='text/css'/>
            <title><?php echo $title; ?></title>
        </head>
        <body>
            <div id="header">
                <img src="images/webd236-logo.png"/>
            </div>
            <form id="nav" method="post" action="PageController.php"> <?php
            foreach ($pages as $key => $value) { 
                if (!isset($_GET['selected']) && !isset($_GET['page'])) {
                    if ($key == 'home') { ?>
                        <button name="page" type="submit" value="<?php echo $key; ?>" 
                                id="<?php echo $key; ?>" class="selected"><?php echo $value; ?>
                        </button> <?php
                    } else { ?>
                        <button name="page" type="submit" value="<?php echo $key; ?>" 
                                id="<?php echo $key; ?>"><?php echo $value; ?>
                        </button> <?php 
                    }
                } elseif (!isset($_GET['selected']) || !isset($_GET['page'])) { ?>                  
                    <button name="page" type="submit" value="<?php echo $key; ?>" 
                                id="<?php echo $key; ?>"><?php echo $value; ?>
                    </button> <?php                    
                } else {
                    if ($_GET['selected'] == 1 && $_GET['page'] == $key) { ?>
                        <button name="page" type="submit" value="<?php echo $key; ?>" 
                                id="<?php echo $key; ?>" class="selected"><?php echo $value; ?>
                        </button> <?php
                    } else { ?>                  
                        <button name="page" type="submit" value="<?php echo $key; ?>" 
                                    id="<?php echo $key; ?>"><?php echo $value; ?>
                        </button> <?php                                        
                    }
                }
            } ?>
            </form>
            <div id='content'> <?php
} 

function main_footer() { ?>
            </div> <!-- content div -->
            <footer>
                <p>
                    Tony Flemings, Copyright &copy; 2013<br />
                    All rights reserved<br />
                    <a href="http://www.tonyflemings.com">Website</a><br />
                    <a href="mailto:tony@tonyflemings.com">
                        Send Mail
                    </a>
                </p>
            </footer>
        </body>
    </html> <?php
} 

function error_page($message) {
    main_header("Error"); ?>
    <p>$message</p> <?php
    main_footer();
}
?>
