from request.addForum import create_forum
from request.addSubForum import create_subForm
from request.postTopics import create_posts
from request.replyTopics import create_reply


def main():
    # ajouter serie ou film nom comme forum
    create_forum()
    # ajouter sous serie ou film seasons comme sous forum
    create_subForm()
    # ajouter des posts concernons la film ou la serie
    create_posts()
    # ajouter les reponse sur une poste
    create_reply()


if __name__ == "__main__":
    main()
