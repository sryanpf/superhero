<?php
class PowerIndex extends PowerIndexView {
    
    public function display($powers) {
        //display page header
        parent::displayHeader("List All Powers");
        ?>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
                  <link type='text/css' rel='stylesheet' href='<?= BASE_URL ?>/www/css/app_style.css' />
        <p><a href="<?= BASE_URL ?>" style=' color: gray; text-decoration: none; font-size: 50px; text-align: left;'>Home</a></p>
        <div id="main-header"> Our Power Library</div>

        <div class="grid-container">
            <?php
            if ($powers === 0) {
                echo "No power was found.<br><br><br><br><br>";
            } else {
                //display powers in a grid; six powers per row
                foreach ($powers as $i => $power) {
                    $id = $power->getId();
                    $name = $power->getName();
                    $ability = $power->getAbility();
                    $description = $power->getDescription();
                    $price = $power->getPrice();
                    
                    if ($i % 6 == 0) {
                        echo "<div class='row'>";
                    }

                    echo "<div class='col'><p><a href='", BASE_URL, "/power/detail/$id'><img src=' " .$image . " '></a><span>$name<br></span></p></div>";
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
