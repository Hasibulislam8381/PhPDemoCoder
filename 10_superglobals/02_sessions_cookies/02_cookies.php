<?php

// Explain what is cookie
//cookie is basically save the user information in user site(browser)
//this is not used for sensetive data for the sensitive data we will use session
setcookie('name', 'Himel', time() + 60, '/');
echo '<pre>';
var_dump($_COOKIE);
echo '</pre>';
