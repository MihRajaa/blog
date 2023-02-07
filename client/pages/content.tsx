import React from 'react';
import { useRouter } from 'next/router';
import { getTopics } from '../Scripts/posts';

export default function Content() {
  const router = useRouter();
  const topics = getTopics();

  function handleClick(post) {
    router.push({
      pathname: './blog/postDetails',
      query: post,
    });
  }
  console.log('topics', topics);

  return (
    <div className='col-8 bg-danger m-2 p-2'>
      <div className='inner-container'>
        <div className='blog-elems'>
          <div className='blog-title'>
            {topics.map((post) => {
              return (
                <div
                  className='card m-2'
                  key={post.post_id}
                  onClick={() => handleClick(post)}>
                  <div className='card-body'>{post.post_subject}</div>
                </div>
              );
            })}
          </div>
        </div>
      </div>
    </div>
  );
}
