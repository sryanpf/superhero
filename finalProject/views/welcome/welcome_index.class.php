
        <?php
class WelcomeIndex extends IndexView {

    public function display() {
        //display page header
        parent::displayHeader("Power Plus");
        ?>    
        <div id="main-header">WELCOME TO THE POWER HOUSE</div> 
        <br>
        <table style="border: none; width: 700px; margin: 5px auto">
            
            <tr>
                <td colspan="2" style="text-align: center; font-family:arial bold; text-spacing:-2px;"><strong>WHAT ARE YOU LOOKING FOR?</strong></td>
            </tr>
            <tr>
                <td style="text-align: left">
                   
            <a href="<?= BASE_URL ?>/index.php/power/index">Powers</a>
            
            <a href="<?= BASE_URL ?>/index.php/guest/show">Sign In</a>
            
        </div>
        <br>
       

        <?php
        //display page footer
        parent::displayFooter();
    }

}