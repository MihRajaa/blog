from typing import Optional
from sqlmodel import Field, SQLModel

# models


class Phpbb_posts(SQLModel, table=True):
    post_id: Optional[int] = Field(default=None, primary_key=True)
    topic_id: int = 0
    forum_id: int = 0
    poster_id: int = 0
    icon_id: int = 0
    post_time: int = 0
    post_reported: int = 0
    enable_bbcode: int = 1
    enable_smilies: int = 1
    enable_magic_url: int = 0
    enable_sig: int = 1
    post_attachment: int = 0
    post_postcount: int = 1
    post_edit_time: int = 0
    post_edit_user: int = 0
    post_edit_count: int = 0
    post_edit_locked: int = 0
    post_visibility: int = 1
    post_delete_time: int = 0
    post_delete_user: int = 0
    post_username: str = ''
    post_subject: str = ''
    post_text: str
    post_checksum: str = ''
    bbcode_bitfield: str = ''
    bbcode_uid: str = ''
    post_edit_reason: str = ''
    post_delete_reason: str = ''
    poster_ip: str = ''
