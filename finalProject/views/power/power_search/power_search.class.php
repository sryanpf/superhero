<?php
class PowerSearch extends PowerIndexView {
    /*
     * the displays accepts an array of power objects and displays
     * them in a grid.
     */

     public function display($terms, $powers) {
        //display page header
        parent::displayHeader("Search Results");
        ?>
        <div id="main-header"> Search Results for <i><?= $terms ?></i></div>
        <span class="rcd-numbers">
            <?php
            echo ((!is_array($powers)) ? "( 0 - 0 )" : "( 1 - " . count($powers) . " )");
            ?>
        </span>
        <hr>

       <!-- display all records in a grid -->
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

                    echo "<div class='col'><div style='text-overflow:clip;'><a href='" . BASE_URL . "/power/detail/$id'></a><span>$name<br>Ability $ability<br> Description $description<br> Price $price <br></span></div></div>";
                    ?> 
                    <?php
                    if ($i % 6 == 5 || $i == count($powers) - 1) {
                        echo "</div>";
                    }
                }
            }
            ?>  
        </div>
        <a href="<?= BASE_URL ?>/power/index">Go to power list</a>
        <?php
        //display page footer
        parent::displayFooter();
    }
}