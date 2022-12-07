<?php exit; ?>
1670426660
SELECT m.*, u.user_colour, g.group_colour, g.group_type FROM (phpbb_blogdbmoderator_cache m) LEFT JOIN phpbb_blogdbusers u ON (m.user_id = u.user_id) LEFT JOIN phpbb_blogdbgroups g ON (m.group_id = g.group_id) WHERE m.display_on_index = 1
6
a:0:{}