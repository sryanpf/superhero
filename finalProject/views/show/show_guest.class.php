<?php
//Marlow Robinson
//3/24/16 
//I211
//This script is responsible for displaying the currently signed in guests
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Power House Guest Book</title>
  <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
                  <link type='text/css' rel='stylesheet' href='<?= BASE_URL ?>/www/css/app_style.css' />
                
    </head>
    <body>
        <div id="main-header">
            <img style= "position: relative; z-index:-2;float: left; width:150px; max-height: 150px;" src="../../www/img/logo.png" alt=""/>
            POWER HOUSE GUEST BOOK
        </div> 
        <h3>Following guests have signed our guest book:</h3>
        <table cellspacing='0'>
            <tr>
                <th style="width:100px">Last Name</th>
                <th style="width:100px">First Name</th>
                <th style="width:100px">Birth Date</th>
                <th style="width:200px">Email</th>
            </tr>


            <?php
//create class "ShowGuest"
            class ShowGuest {
//public function to retrieve guests' information and display it on the table
                public function display($guests) {
                    foreach ($guests as $guest) {
                        echo "<tr>";
                        echo "<td>" . $guest->getFirstname() . "</td>";
                        echo "<td>" . $guest->getLastname() . "</td>";
                        echo "<td>" . $guest->getBirthdate() . "</td>";
                        echo "<td>" . $guest->getEmail() . "</td>";
                        echo "</tr>";
                    }
                }

            }
            ?>
             <p><a href="<?= BASE_URL ?>">Home</a></p>
            <p><a href="index.php?action=index">Sign Guest Book</a></p>
            <p><a href="<?= BASE_URL ?>/power/index">Go to power list</a></p>
    </body>
</html>
