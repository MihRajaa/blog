<?php
define('IN_PHPBB', true);
$phpbb_root_path = './../phpbb/';
$phpEx = substr(strrchr(__FILE__, '..'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/functions_posting.' . $phpEx);

$user_id = 2;
$forum_id = 6;
$subject = 'Missatge de prova';
$text = 'Aquest és un missatge de prova enviat per l\'[b]script[/b].';

//Initialize user variables
$user->session_create($user_id);
$auth->acl($user->data);
$user->setup();

//User initialized, we can now do our things :D

//Get the forum name (needed by submit_post for e-mail notifications)
$sql = 'SELECT forum_name FROM ' . FORUMS_TABLE . ' WHERE forum_id=' . (int)$forum_id;
$result = $db->sql_query($sql);
$row = $db->sql_fetchrow($result);
$db->sql_freeresult($result);
$forum_name = $row['forum_name'];

//Submit the new post
$poll = $uid = $bitfield = $flags = '';
generate_text_for_storage($text, $uid, $bitfield, $flags, true, true, true);
$data = array(
    'forum_id'      => $forum_id,
    'topic_id'       => 0,
    'icon_id'       => false,
    'enable_bbcode'     => true,
    'enable_smilies'    => true,
    'enable_urls'       => true,
    'enable_sig'        => true,
    'message'       => $text,
    'message_md5'   => md5($text),
    'bbcode_bitfield'   => $bitfield,
    'bbcode_uid'        => $uid,
    'post_edit_locked'  => 0,
    'topic_title'       => $subject,
    'notify_set'        => false,
    'notify'            => false,
    'post_time'         => 0,
    'forum_name'        => $forum_name,
    'enable_indexing'   => true,
    'force_approved_state'    => true,
    'force_visibility'            => true,
);
$result = submit_post('post', $subject, '', POST_NORMAL, $poll, $data);

if ($result === FALSE) {
    echo "Error sending post";
} else {
    echo "Post sent successfully, URL is: $result";
}

//After doing things, just clean up the session
$user->session_kill(false);
