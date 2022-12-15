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
$user->session_begin();
$auth->acl($user->data);
$user->setup('');

$names = $request->variable_names(\phpbb\request\request_interface::GET);
var_dump($names);

$start = $request->variable('start', \phpbb\request\request_interface::GET);
$submit = $request->variable('submit', \phpbb\request\request_interface::POST);
$session = $request->variable('user_sid', \phpbb\request\request_interface::COOKIE);



if ($user->data['is_registered']) {
    //User is already logged in
    echo "You're already logged in!";
} else {
    $username = $request->variable('username', '', true);
    $password = $request->variable('password', '', true);
    $autologin = (!empty($_POST['autologin'])) ? true : false;
    $viewonline = (!empty($_POST['viewonline'])) ? 0 : 1;
    $admin = 0;

    $result = $auth->login($username, $password, $autologin, $viewonline, $admin);
    var_dump($result['error_msg']);
    if ($result['status'] != LOGIN_SUCCESS) {
        $err = $user->lang[$result['error_msg']];

        if ($result['error_msg'] == 'LOGIN_ERROR_USERNAME' || $result['error_msg'] == 'LOGIN_ERROR_PASSWORD') {
            $err = (!$config['board_contact']) ? sprintf($user->lang[$result['error_msg']], '', '') : sprintf($user->lang[$result['error_msg']], '<a href="mailto:' . htmlspecialchars($config['board_contact']) . '">', '</a>');
        }

        if ($err) {
            echo "<font color=red><b>$err</b></font>";
        }
        echo "failed";
    } else {

        $auth->acl($user->data);

        echo 'Bienvenue ' . $user->data['username'] . '<br />';
        echo '<a href="' . append_sid('mon_login.php?logout=true') . '">Déconnexion</a>';

        echo "success";
    }
}


if ($user->data['user_id'] != ANONYMOUS) {
    echo 'Bienvenue ' . $user->data['username'] . '<br />';
    echo '<a href="' . append_sid('mon_login.php?logout=true') . '">Déconnexion</a>';
} else {
    if ($err) {
        echo "<font color=red><b>$err</b></font>";
    }
}
