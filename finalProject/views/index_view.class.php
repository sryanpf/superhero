 <?php
class IndexView {

    //this method displays the page header
    static public function displayHeader($page_title) {
        ?>
        <!DOCTYPE html>
        <html>
            <head>
                <title> <?php echo $page_title ?> </title>
                <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
                  <link type='text/css' rel='stylesheet' href='<?= BASE_URL ?>/www/css/app_style.css' />
                
                <script>
                    //create the JavaScript variable for the base url
                    var base_url = "<?= BASE_URL ?>";
                    
                   
                </script>
            </head>
            <body>
                <div id="top"></div>
                <div id='wrapper'>
                    <div id="banner">
                    
                            <div id="left">
                                
                                <span style='color: #000; font-size: 12pt; z-index:1; position:relative;  top: -50px; font-weight: bold; vertical-align: center; font-family: mona shark;'>
                             <img src="<?= BASE_URL ?>/www/img/logo.png">
                                    
                                </span>
                            
                                <div style='color: #000; font-size: 14pt; font-weight: bold; font-family:calibri; letter-spacing:4px; text-align:center; position:relative;'>Find any power, any ability at your one-stop black market shop.</div>
                            </div>
                        </a>
                        <div id="right">
                            
                        </div>
                    </div>
                    
                    <?php
                                      
                               
                }//end of displayHeader function
                
                //this method displays the page footer
                public static function displayFooter() {
                    ?>
                    <br><br><br>
                    <div id="push"></div>
                </div>
                <div id="footer"><br>&copy 2016 Power House. All Rights Reserved.</div>
                <script type="text/javascript" src="<?= BASE_URL ?>/www/js/ajax_autosuggestion.js"></script>
            </body>
        </html>
        <?php
    } //end of displayFooter function
}