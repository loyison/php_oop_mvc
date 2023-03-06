<?php
    // DB Params
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', 'root');
    define('DB_NAME', 'lmvcshareposts');

    // App root.
    define('APPROOT', dirname(dirname(__FILE__)));

    // Url root.
    define('URLROOT', 'http://localhost/oop_php_mvc/loyisomvcshareposts');
    // Site Name
    define('SITENAME', 'loyisomvcShareposts');
    // APP version.
    define('APPVERSION', '1.0.0');

    /*
     * examples when deploying and looking to require or get apps route folder
     * echo __FILE__; = /Applications/MAMP/htdocs/oop_php_mvc/framework/app/config/config.php
     * echo dirname(__FILE__); = /Applications/MAMP/htdocs/oop_php_mvc/framework/app/config
     * echo dirname(dirname(__FILE__)); = /Applications/MAMP/htdocs/oop_php_mvc/framework/app/ - what i want returned
     */
