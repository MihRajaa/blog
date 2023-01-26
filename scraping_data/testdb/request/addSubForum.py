# Here we add the season of serie in forum format


import json
from sqlmodel import Session

from models.ForumsModels import PhpbbForums
from db import engine


def create_subForm():
    # for dic in res_list:
        post = PhpbbForums(
            forum_id=5,
            poster_id=2,
            post_username='admin',
            post_subject=['title'],
            post_text=['text'],
        )

        with Session(engine) as session:
            session.add(post)

            try:
                session.commit()

                print("success commit")
            except Exception as e:
                session.rollback()
                print("error:", str(e))


