# Here we add the content of posts like episodes or films links

import json
from sqlmodel import Session

from models.PostsModels import Phpbb_posts
from db import engine


text = "kkkkkkkkkkkkkkkkkk"

with open('../yt-result.json', 'r') as f:
    response = json.load(f)


res_list = []

for dic in response:
    content = {
        "title": dic['title'],
        "text": dic['link']
    }
    res_list.append(content)


def create_posts():
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



