from typing import Optional
from sqlmodel import Field, SQLModel


class Phpbb_forums(SQLModel, Table=True):
    forum_id: Optional[int] = Field(default=None, primary_key=True)
    parent_id: int = '0'
    left_id: int = '0'
    right_id: int = '0'

    forum_name: str
    forum_parents: str
    forum_desc: str

    forum_desc_bitfield: str = ''
    forum_desc_options: int = '7'
    forum_desc_uid: str = ''
    forum_link: str = ''
    forum_password: str = ''
    forum_style: int = '0'
    forum_image: str = ''
    forum_rules: str = ''
    forum_rules_link: str = ''
    forum_rules_bitfield: str = ''
    forum_rules_options: int = '7'
    forum_rules_uid: str = ''
    forum_topics_per_page: int = '0'
    forum_type: int = '0'
    forum_status: int = '0'
    forum_last_post_id: int = '0'
    forum_last_poster_id: int = '0'
    forum_last_post_subject: str = ''
    forum_last_post_time: int = '0'
    forum_last_poster_name: str = ''
    forum_last_poster_colour: str = ''
    forum_flags: int = '32'
    display_on_index: int = '1'
    enable_indexing: int = '1'
    enable_icons: int = '1'
    enable_prune: int = '0'
    prune_next: int = '0'
    prune_days: int = '0'
    prune_viewed: int = '0'
    prune_freq: int = '0'
    display_subforum_list: int = '1'
    display_subforum_limit: int = '0'
    forum_options: int = '0'
    enable_shadow_prune: int = '0'
    prune_shadow_days: int = '7'
    prune_shadow_freq: int = '1'
    prune_shadow_next: int = '0'
    forum_posts_approved: int = '0'
    forum_posts_unapproved: int = '0'
    forum_posts_softdeleted: int = '0'
    forum_topics_approved: int = '0'
    forum_topics_unapproved: int = '0'
    forum_topics_softdeleted: int = '0'
