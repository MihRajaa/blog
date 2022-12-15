<?php

header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


define('IN_PHPBB', true);
$phpbb_root_path = './../phpbb/';
$phpEx = substr(strrchr(__FILE__, '..'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
require_once($phpbb_root_path . 'includes/bbcode.' . $phpEx);
require_once($phpbb_root_path . 'includes/functions_display.' . $phpEx);
require_once($phpbb_root_path . 'includes/functions_admin.' . $phpEx);

$user->session_begin();
$auth->acl($user->data);
$user->setup('');


// Logout
if (isset($_GET['logout'])) {
    $user->session_kill();
    $user->session_begin();
}


foreach ($_POST as $key => $value) {
    echo $key;
}
