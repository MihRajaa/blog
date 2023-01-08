# Here we add the season of serie in forum format


import json
from sqlmodel import Session

from scraping_data.sqlmodel.models.postModels import Phpbb_posts
from db import engine


def create_subForm():
    for dic in res_list:
        post = Phpbb_posts(
            forum_id=5,
            poster_id=2,
            post_username='admin',
            post_subject=dic['title'],
            post_text=dic['text'],
        )

        with Session(engine) as session:
            session.add(post)

            try:
                session.commit()

                print("success commit")
            except Exception as e:
                session.rollback()
                print("error:", str(e))


def main():
    create_subForm()


if __name__ == "__main__":
    main()
