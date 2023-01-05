from typing import Optional

from sqlmodel import Field, SQLModel

# models


class Phpbb_posts(SQLModel, table=True):
    topic_id : int = 1
    forum_id : int
    poster_id : int
    icon_id : int
    post_time : int
    post_reported  : int
    enable_bbcode : int
    enable_smilies : int
    enable_magic_url : int
    enable_sig : int
    post_attachment : int
    post_postcount : int
    post_edit_time : int
    post_edit_user : int
    post_edit_count : int
    post_edit_locked : int
    post_visibility : int
    post_delete_time : int
    post_delete_user : int
    post_username : str
    post_subject : str
    post_text : str
    post_checksum : str
    bbcode_bitfield : str
    bbcode_uid : str
    post_edit_reason : str
    post_delete_reason : str
    poster_ip : str
