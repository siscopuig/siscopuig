<?php

# Production
#define('BASE_URL', 'http://'.$_SERVER['HTTP_HOST'].
# str_replace('public', '', dirname($_SERVER['SCRIPT_NAME'])));

# Local development
define('BASE_URL', 'http://'.$_SERVER['HTTP_HOST'] .
    str_replace('public', '', dirname($_SERVER['SCRIPT_NAME'])).'/');

