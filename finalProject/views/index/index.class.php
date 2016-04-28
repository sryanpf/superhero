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
                <link rel="stylesheet" href="www/css/styles.css" type="text/css" />
            </head>
            <body>
                <h2>Guest Sign In</h2>
                <h3> Please complete the form. All fields are required.</h3>
                <form method="post" action="<?= BASE_URL ?>/index.php/guest/sign">
                    <table cellspacing='0'>
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
      