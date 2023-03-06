<?php
    // Load config file.
    require_once 'config/config.php';
    // Load libraries.
    //require_once 'libraries/core.php';
    //require_once 'libraries/controller.php';
    //require_once 'libraries/database.php';

    // Autoload libraries, classname should be the same as filename
    spl_autoload_register(function($className){
        require_once 'libraries/' . $className . '.php';
    });
