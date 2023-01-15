<?php
    define ("USER_NAME", "alex");
    define ("USER_PASSWORD", 123);
    define ("DATABASE_NAME","forum_chat");
    
    define("DATABASE_CONNECTION",new mysqli("localhost",USER_NAME,USER_PASSWORD,DATABASE_NAME)); 
?>