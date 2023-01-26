# Here we add the name of film or serie in forum format
from sqlmodel import Session, select

from db import engine
from models.ForumsModels import Phpbb_forums
from models.PostsModels import Phpbb_posts


parent_id = 3  # id of categorie series and '6' for films
parent_name = 'Series'  # name of categorie Series and 'Films' for films


def create_forum():

    forums = Phpbb_forums(
        parent_id=parent_id,
        left_id=2,
        right_id=7,
        # forum_parents=parent_name,
        forum_name='vikings',
        forum_desc='la serie de vikings '
    )

    

    # with Session(engine) as session:
    
    session = Session(engine)
        
    if session:
        print("session:", session)

    try:
        session.add(forums)
        print("success adding")
    except Exception as e:
        session.rollback()
        print("error:", str(e))


    session.commit()
    


