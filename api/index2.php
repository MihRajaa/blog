<?php

// namespace phpbb\auth\provider;

namespace acme\demo\auth\provider;

header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");




/**
 * Database authentication provider for phpBB3
 *
 * This is for authentication via the integrated user table
 */
class db2 extends \phpbb\auth\provider\base
{
    /** @var \phpbb\db\driver\driver_interface $db */
    protected $db;

    /**
     * Database Authentication Constructor
     *
     * @param \phpbb\db\driver\driver_interface $db
     */
    public function __construct(\phpbb\db\driver\driver_interface $db)
    {
        $this->db = $db;
    }

    /**
     * {@inheritdoc}
     */
    public function login($username, $password)
    {
        // Auth plugins get the password untrimmed.
        // For compatibility we trim() here.
        $password = trim($password);

        // do not allow empty password
        if (!$password) {
            return array(
                'status'    => LOGIN_ERROR_PASSWORD,
                'error_msg' => 'NO_PASSWORD_SUPPLIED',
                'user_row'  => array('user_id' => ANONYMOUS),
            );
        }

        if (!$username) {
            return array(
                'status'    => LOGIN_ERROR_USERNAME,
                'error_msg' => 'LOGIN_ERROR_USERNAME',
                'user_row'  => array('user_id' => ANONYMOUS),
            );
        }

        $username_clean = utf8_clean_string($username);

        $sql = 'SELECT user_id, username, user_password, user_passchg, user_pass_convert, user_email, user_type, user_login_attempts
            FROM ' . USERS_TABLE . "
            WHERE username_clean = '" . $this->db->sql_escape($username_clean) . "'";
        $result = $this->db->sql_query($sql);
        $row = $this->db->sql_fetchrow($result);
        $this->db->sql_freeresult($result);

        // Successful login... set user_login_attempts to zero...
        return array(
            'status'    => LOGIN_SUCCESS,
            'error_msg' => false,
            'user_row'  => $row,
        );
    }
}
