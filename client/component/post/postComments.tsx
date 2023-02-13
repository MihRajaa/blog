import React from 'react';
import { getComments } from '../../Scripts/posts';

export default function PostComments({ post_id }) {
  const comments = getComments(Number(post_id));
  console.log(typeof post_id, post_id);

  return (
    <div className='row d-flex justify-content-center m-3'>
      {comments &&
        comments.map((comment) => {
          return (
            <div className='card w-75 m-2' key={comment.post_id}>
              <div className='card-body'>
                <h5 className='card-title'>{comment.post_subject}</h5>
                <p className='card-text'>{comment.post_text}</p>
              </div>
            </div>
          );
        })}
    </div>
  );
}
