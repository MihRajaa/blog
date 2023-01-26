import React from 'react';
import { useRouter } from 'next/router';
import { getTopics } from '../api/storage';

export default function Content() {
  const router = useRouter();
  const topics = getTopics();

  function handleClick(post) {
    router.push({
      pathname: './component/content/blogItem',
      query: post,
    });
  }
  console.log('topics', topics);

  return (
    <div className='d-grid'>
      <div className='row justify-content-around m-3'>
        <div className='col bg-primary m-2'>pub left</div>
        <div className='col-8 bg-danger m-2 p-2'>
          <div className='inner-container'>
            <div className='blog-elems'>
              <div className='blog-title'>
                {topics.map((post) => {
                  return (
                    <div
                      className='card m-2'
                      key={post.post_id}
                      onClick={(e) => handleClick(post)}>
                      <div className='card-body'>{post.post_subject}</div>
                    </div>
                  );
                })}
              </div>
            </div>
          </div>
        </div>
        <div className='col bg-primary m-2'>pub right</div>
      </div>
    </div>
  );
}
