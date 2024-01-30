<?php

//setting both parameters to true;
ini_set('session.use_cookies',1);
ini_set('session.use_strict_mode',1);

session_set_cookie_params([
//   setting a timeline to our cookies
    'lifetime' => 40,
//    if we use a cookie it will only work in our domain
    'domain' => 'localhost',
//   setting our cookie to work in every file inside our domain
    'path' => '/',
//   we only run this cookie in a safe website
    'secure' => true,
//   goes inside our website
    'httponly' => true
]);

session_start();

session_regenerate_id(true);