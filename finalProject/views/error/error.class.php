<?php

//file to display error messages
class Error {

    public function display($message) {
        ?>
        <!DOCTYPE html>
        <html>
            <head>
                <title>Guestbook Error</title>
                <link rel="stylesheet" href="www/css/styles.css" type="text/css" />
            </head>
            <body>
                <h2>Power House Sign In</h2>
                <table width='500' cellspacing="0">
                    <tr>
                        <td valign='center' align='center'>
                            <img src='www/img/deadpool.png' border='0'/>
                        </td>
                        <td valign='top' align='left'>
                            <h3> We're sorry, but an error has occurred.</h3>
                            <?php echo $message; ?>
                            <p><a href="<?= BASE_URL ?>/index.php/guest/show">Sign In</a></p>
                        </td>
                    </tr>
                </table>
            </body>
        </html>

        <?php
    }
}