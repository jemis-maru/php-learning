<?php

require_once './auth/User.php';

use function Auth\helper;
use const Auth\VERSION;

helper();
echo VERSION;
