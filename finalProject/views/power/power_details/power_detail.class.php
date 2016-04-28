<?php
class power_detail {
    
    public function display($power, $confirm = "") {
        //display page header
        parent::displayHeader("Power Details");

        //retrieve power details by calling get methods
        $id = $power->getId();
        $name = $power->getName();
        $ability = $power->getAbility();
        $description = $power->getDescription();
        $price = $power->getPrice();
        $quantAvailable = $power->getQuantAvailable();
        
        
       
        ?>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
                  <link type='text/css' rel='stylesheet' href='<?= BASE_URL ?>/www/css/app_style.css' />
                

        <div id="main-header">Power Details</div>
      
        <hr>
        <!-- display movie details in a table -->
        <table id="detail">
            <tr>
                <td style="width: 150px;">
                    <img src="<?= $image ?>" alt="<?= $title ?>" />
                </td>
                <td style="width: 130px;">
                    <p><strong>Name:</strong></p>
                    <p><strong>Power:</strong></p>
                    <p><strong>Description:</strong></p>
                    <p><strong>Price:</strong></p>
                    <p><strong>Quantity Available:</strong></p>
                    <p><strong>Description:</strong></p>   
                </td>
                <td>
                    <p><?= $name ?></p>
                    <p><?= $ability ?></p>
                    <p><?= $description ?></p>
                    <p><?= $price ?></p>
                    <p><?= $quantAvailable ?></p>
                    
                    <div id="confirm-message"><?= $confirm ?></div>
                </td>
            </tr>
        </table>
        <a href="<?= BASE_URL ?>/power/index">Go to power list</a>

        <?php
        //display page footer
        parent::displayFooter();
    }
}
