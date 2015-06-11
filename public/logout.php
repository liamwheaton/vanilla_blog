<?php 

require_once '../libraries/login.lib.php';
require_once '../libraries/url.lib.php';

Login::log_out();

URL::redirect('index.php');