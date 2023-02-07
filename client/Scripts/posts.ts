import { useAppSelector } from '../redux/app/store';

export const getPosts = () => {
  const posts = useAppSelector((state) => state.postsReducer.postsState);
  return posts;
};

export const getTopics = () => {
  const posts = getPosts();
  const topics = posts.filter((post) => {
    return post.topic_id === 0;
  });

  return topics;
};

export const getComments = (id) => {
  const posts = getPosts();
  const comments = posts.filter((post) => {
    return post.topic_id === id;
  });
  return comments;
};
