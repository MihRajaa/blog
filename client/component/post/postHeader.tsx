import React from 'react';
export default function PostHeader({ post }) {
  return (
    <div className='col d-flex justify-content-center m-5'>
      <div className='card w-75'>
        <div className='card-body'>
          <h5 className='card-title'>{}</h5>
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
