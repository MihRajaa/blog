<?php

// Include the PHPBB API
define('IN_PHPBB', true);
$phpbb_root_path = './../forum/';
$phpEx = substr(strrchr(__FILE__, '..'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/functions_user.' . $phpEx);


// Parse the POST data as JSON
$data = json_decode(file_get_contents("php://input"), true);
var_dump($data);
// Set the variables for the new post

// Start a new session
$user->session_begin();

// Check if the user is already logged in
if ($user->data['is_registered']) {
    // The user is already logged in
    // Redirect to the homepage
    // header("Location: ./../forum/index.php");
    print('Bienvenue ' . $user->data['username'] . ' ici');

    exit;
}

// Check if the login form has been submitted
if (isset($_POST['login'])) {
    // Get the username and password from the form
    $username = $data['username'];
    $password = $data['password'];

    // Check if the login is valid
    $result = $auth->login($username, $password);
    if ($result['status'] == LOGIN_SUCCESS) {
        // The login was successful
        // Redirect to the homepage
        print('Bienvenue ' . $user->data['username'] . ' ici');
        // header("Location: ./../forum/index.php");
        exit;
    } else {
        // The login was unsuccessful
        // Display an error message
        echo "Invalid username or password";
    }
}

// Display the login form
// echo '
// <form action="" method="post">
//   <label for="username">Username:</label><br>
//   <input type="text" id="username" name="username"><br>
//   <label for="password">Password:</label><br>
//   <input type="password" id="password" name="password"><br><br>
//   <input type="submit" value="Log in" name="login">
// </form> 
// ';
