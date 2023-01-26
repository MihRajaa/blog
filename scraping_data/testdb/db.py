from sqlmodel import create_engine

# connection de base de donnees
sqlite_url = "mariadb+pymysql://root:123456789@127.0.0.1:3306/blogdb?charset=utf8mb4"
engine = create_engine(sqlite_url)

