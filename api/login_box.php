<?php


header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


// Include the PHPBB API
define('IN_PHPBB', true);
$phpbb_root_path = './../forum/';
$phpEx = substr(strrchr(__FILE__, '..'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/functions_user.' . $phpEx);


// Start the session
$user->session_begin();

// Parse the POST data as JSON
$data = json_decode(file_get_contents("php://input"), true);

// Check if the user is already logged in
if ($user->data['is_registered']) {
    // User is already logged in, return their token
    $response = array(
        'success' => true,
        'token' => $user->data['session_id']
    );
} else {
    // Attempt to login the user
    $username = $data['username'];
    $password = $data['password'];
    $result = $auth->login($username, $password);
    if ($result['status'] == LOGIN_SUCCESS) {
        // Login was successful, return the token
        $response = array(
            'success' => true,
            'token' => $user->data['session_id'],
            'user' => $user->data['username']
        );
    } else {
        // Login failed, return an error
        $response = array(
            'success' => false,
            'error' => $result['error_msg'],
            'user' => ''
        );
    }
}

// Return the response as JSON
header('Content-Type: application/json');
echo json_encode($response);
