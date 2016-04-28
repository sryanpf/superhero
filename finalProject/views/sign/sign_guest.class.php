<?php
//Logan Sotelo
//3/24/16 
//Louie Zhu
//I211
//This script is designed to display a "thank you" message for signing in

//new class name "SignGuest"
class SignGuest{
//public function named "display"
    public function display() {    
?>
<!DOCTYPE html>
        <html>
            <head>
                <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
                  <link type='text/css' rel='stylesheet' href='<?= BASE_URL ?>/www/css/app_style.css' />
               
                <title>Power House Sign In</title>
                <div id="main-header">SUCCESS!</div> 
        <br>
        <table style="border: none; width: 700px; margin: 5px auto">
            
            <tr> 
            </head>
            <body>
                <h2>YOU'RE SIGNED UP!</h2>
                <h3>Thank you for signing our guest book. Feel free to battle each other.</h3>
                <?php
                }//end display function
}//end SignGuest
                ?>
                <div id='links'>
                <a href="<?= BASE_URL ?>/index.php/guest/show">Show Guestbook</a>
                <a href="<?= BASE_URL ?>/power/index">Go to power list</a>
                </div>
            </body>
        </html>
