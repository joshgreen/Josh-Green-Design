<?php
// Remove the Error Message From the Login Page
add_filter('login_errors', function('$a', "return null;"));
