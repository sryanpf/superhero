<?php

//Logan Sotelo
//3/24/16 
//Louie Zhu
//I211
//class responsible for displaying the guest sign in form using POST method
class Index {

    public function display() {
        ?>
        <!DOCTYPE html>
        <html>
            <head>
                <title>Power House Sign In</title>
                <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
                <link type='text/css' rel='stylesheet' href='<?= BASE_URL ?>/www/css/app_style.css' />
            <div id="main-header" style=' text-align: center;'>SEE WHO ELSE IS IN OUR HOUSE</div> 
            <br>
            <table style="border: none; width: 700px; margin: 5px auto">

            </head>
            <body>
                <h3> Guest sign in! </h3>
                <h3> Please complete the form. All fields are required.</h3>
                <form method="post" action="<?= BASE_URL ?>/index.php/guest/sign">
                   <div id="center>" <table cellspacing='0'>
                        <tr>
                            <th>Last Name</th>
                            <td><input type="text" name="first_name" size="30" /></td>
                        </tr>
                        <tr>
                            <th>First Name</th>
                            <td><input type="text" name="last_name" size="30" /></td>
                        </tr>
                        <tr>
                            <th>Birth Date</th>
                            <td><input name="birth_date" size="15" /></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><input name="email" size="30" /></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><input type="submit" value="Submit" /></td>
                        </tr>
                    </table>
                </div>
                </form>
                <p><a href="<?= BASE_URL ?>">Home</a></p>
                <a href="<?= BASE_URL ?>/index.php/guest/show">Show Guestbook</a>
                <p><a href="<?= BASE_URL ?>/power/index">Go to power list</a></p>
            </body>
        </html>
        <?php
    }

//end of display
}

//end of index class
?>
      
