import json
from sqlmodel import Session

from models.models import Phpbb_posts
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


print(res_list)

def create_posts():
    for dic in res_list:
        post = Phpbb_posts(

            topic_id = True,
            forum_id = 5,
            poster_id = 2,
            icon_id = True,
            poster_ip = True,
            post_time= True,
            post_reported = True,
            enable_bbcode= True,
            enable_smilies= True,
            enable_magic_url= True,
            enable_sig= True,
            post_username = 'admin',
            post_subject = dic['title'],
            post_text = dic['text'],
            post_checksum = True,
            post_attachment = True,
            bbcode_bitfield = True,
            bbcode_uid = True,
            post_postcount= True,
            post_edit_time= True,
            post_edit_reason = True,
            post_edit_user = True,
            post_edit_count = True,
            post_edit_locked = True,
            post_visibility = True,
            post_delete_time = True,
            post_delete_reason = True,
            post_delete_user = True,
        )
    

        with Session(engine) as session:
            session.add(post)

            try:
                session.commit()
                
                print("success commit")
            except Exception as e:
                session.rollback()
                print("error:",str(e))




def main():
    create_posts()


if __name__ == "__main__":
    main()
