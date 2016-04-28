<?php

class PowerDescription extends PowerIndexView {
    
    public function display($description) {
        //display page header
        parent::displayHeader("Power Description");
        ?>


              <title>Power House Power Library</title>
  <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
                  <link type='text/css' rel='stylesheet' href='<?= BASE_URL ?>/www/css/app_style.css' />
                
    </head>
    <body>
        <div id="main-header">
            <img style= "position: relative; z-index:-2;float: left; width:150px; max-height: 150px;" src="../../www/img/logo.png" alt=""/>
            OUR POWER LIBRARY
        </div> 
        <div class="grid-container">
            <?php
            if ($powers === 0) {
                echo "No power was found.<br><br><br><br><br>";
            } else {
                //display description in a grid
                foreach ($powers as $i => $power) {
                   $id = $power->getId();
                   $name = $power->getName();
                   $ability = $power->getAbility();
                   $description = $power->getDescription();
                   $price = $power->getPrice();
                   $quantAvailable = $power->getQuantAvailable();
                    
                    if ($i % 6 == 0) {
                        echo "<div class='row'>";
                    }

                    echo "<div class='col'><p><a href='", BASE_URL, "/power/detail/$id'></a><span>$name<br>$ability<br>$price<br>$description<br>$quantAvailable<br>" . "</span></p></div>";
                    ?>
                    <?php
                    if ($i % 6 == 5 || $i == count($powers) - 1) {
                        echo "</div>";
                    }
                }
            }
            ?>  
        </div>
       

        <?php
        //display page footer
        parent::displayFooter();
    }
}
