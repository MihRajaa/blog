# Here we add the replys of posts
import json

from models.PostsModels import Phpbb_posts
from sqlmodel import Session
from db import engine


with open('../tweetter-result.json', 'r') as f:
    response = json.load(f)


res_list = []

for dic in response:
    content = {
        "title": dic['user']['screen_name'],
        "text": dic['text']
    }
    res_list.append(content)

topic_id = 2
forum_id = 5


def create_reply():
    for dic in res_list:
        post = Phpbb_posts(
            topic_id=topic_id,
            forum_id=forum_id,
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

