<?php
//load application settings
require_once ("application/config.php");

//load autoloader
require_once ("application/autoloader.class.php");

//load the displather that dissects a request URL
new Dispatcher();