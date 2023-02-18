import json
import tweepy

consumer_key = "JRAwOiHEMU3kM94UN4h4qY9U6"
consumer_secret = "Viv8IS8eF1mOrLkQJn7pgNCQCtlOqWk0Ow85jAKPon2u2DUTSn"
access_token = "632452088-PQlO8KNxmiQBqSz1XFCSaNMk6NcgsmK9b876hPEK"
access_token_secret = "mjxCtXEzxeMjLIMV0RPvbxjZW01b0uw99z51B927qO3No"


auth = tweepy.OAuthHandler(consumer_key, consumer_secret)
auth.set_access_token(access_token, access_token_secret)

api = tweepy.API(auth)

me = api.verify_credentials()
max_tweets = 100
query = 'bleach'
# searched_tweets = [status._json for status in tweepy.Cursor(
#     api.search_tweets,  q=query).items(max_tweets)]
# json_strings = [json.dumps(json_obj) for json_obj in searched_tweets]


public_tweets = tweepy.Cursor(
    api.search_tweets, "NoCopyrightSounds").items(10)


# print(json_strings[0])

data = []

for tweet in public_tweets:
    data.append(tweet._json)

js = json.dumps(data)


with open("./tweetter-result.json", "w") as f:
    f.write(js)
