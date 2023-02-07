import React from 'react';
import { getComments } from '../../Scripts/posts';

export default function PostComments({ post }) {
  const comment = getComments(2);

  return (
    <div className='row d-flex justify-content-center m-3'>
      <div className='card w-75 m-2'>
        <div className='card-body'>
          <h5 className='card-title'>Card title</h5>
          <p className='card-text'>
            With supporting text below as a natural lead-in to additional
            content.
          </p>
          <a href='#' className='btn btn-primary'>
            Button
          </a>
        </div>
      </div>
    </div>
  );
}
