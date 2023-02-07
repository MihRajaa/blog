# Here we add the season of serie in forum format


import json
from sqlmodel import Session

from models.ForumsModels import Phpbb_forums
from db import engine


def create_subForm():

    sub_forum = Phpbb_forums(
        parent_id=4,
        left_id=2,
        right_id=7,
        forum_name='vikings',
        forum_desc='la serie de vikings '
    )

    with Session(engine) as session:
        session.add(sub_forum)

        try:
            session.commit()

            print("success commit")
        except Exception as e:
            session.rollback()
            print("error:", str(e))


