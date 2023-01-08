# Here we add the name of film or serie in forum format

from sqlmodel import Session

from models.forumModels import Phpbb_forums
from db import engine


parent_id = 4  # id of categorie series and '6' for films
parent_name = 'Series'  # name of categorie Series and 'Films' for films


def create_forum():

    forum = Phpbb_forums(
        parent_id=parent_id,
        left_id=3,
        right_id=6,
        forum_parents=parent_name,
        forum_name='vikings',
        forum_desc='la serie de vikings ',
    )

    with Session(engine) as session:
        session.add(forum)

        try:
            session.commit()

            print("success commit")
        except Exception as e:
            session.rollback()
            print("error:", str(e))


def main():
    create_forum()


if __name__ == "__main__":
    main()
