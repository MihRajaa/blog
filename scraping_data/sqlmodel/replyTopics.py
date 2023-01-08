# Here we add the replys of posts


import json
from sqlmodel import Session

from models.postModels import Phpbb_posts
from db import engine


with open('../tweetter-result.json', 'r') as f:
    response = json.load(f)


res_list = []

# for dic in response:
#     content = {
#         "title": dic['title'],
#         "text": dic['link']
#     }
#     res_list.append(content)


def create_reply():
    # for dic in res_list:
    post = Phpbb_posts(
        topic_id=2,
        forum_id=5,
        poster_id=2,
        post_username='admin',
        post_subject='reply test',
        post_text='testing the reply',
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
    create_reply()


if __name__ == "__main__":
    main()
