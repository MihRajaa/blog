#  here we do verify the links in our base

import requests
from sqlmodel import Session, select

from models.postModels import Phpbb_posts
from db import engine


def select_link():
    with Session(engine) as session:
        statement = select(Phpbb_posts)
        results = session.exec(statement)
        for res in results:
            try:
                response = requests.get(res.post_text)
                if response.status_code != 200:
                    print("Invalid link: HTTP status code {}".format(
                        response.status_code))
            except Exception as e:
                print("Invalid link: {}".format(e))


def main():
    select_link()


if __name__ == "__main__":
    main()
