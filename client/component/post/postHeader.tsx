import React from 'react';
export default function PostHeader({ post }) {
  return (
    <div className='col d-flex justify-content-center m-5'>
      <div className='card w-75'>
        <div className='card-body'>
          <h5 className='card-title'>{post.post_subject}</h5>
          <p className='card-text'>{post.post_text}</p>
        </div>
      </div>
    </div>
  );
}
