<?php 
    $cookie_name ='user';
    $cookie_value ='jono';

    setcookie($cookie_name, $cookie_value);

    $cookie_value = 'terjo';
    setcookie($cookie_name, $cookie_value);

    echo $COOKIE[$cookie_name];
     
    setcookie ('user, "", time()-3600);
    echo '<br>';
    var_dump($_COOKIE);














?>