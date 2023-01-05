from models.models import *
from sqlmodel import create_engine

# connection de base de donnees
engine = create_engine(
    "mariadb+pymysql://root:123456789@127.0.0.1:3306/blogdb?charset=utf8mb4", echo=True, future=True)


