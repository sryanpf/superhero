<?php
class PowerIndexView extends IndexView{
    public static function displayHeader($title) {
       
        ?>
        <script>
            //the media type
            var media = "power";
        </script>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
                  <link type='text/css' rel='stylesheet' href='<?= BASE_URL ?>/www/css/app_style.css' />
                
        <div id="searchbar" style='position: relative; z-index:100;'>
            <form method="get" action="<?= BASE_URL ?>/power/search">
                <input type="text" name="query-terms" id="searchtextbox" placeholder="Search powers by title" autocomplete="off" onkeyup="handleKeyUp(event)">
                <input type="submit" value="Go" />
            </form>
            <div id="suggestionDiv"></div>
        </div>
        <script type="text/javascript" src="<?= BASE_URL ?>/www/js/ajax_autosuggestion.js"></script>
        <?php
    }

    public static function displayFooter() {
     
    }
}
