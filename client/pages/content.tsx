import React from 'react';
import BlogItem from './component/content/blogItem';

export default function Content() {
  return (
    <div className='d-grid'>
      <div className='row justify-content-around m-3'>
        <div className='col bg-primary m-2'>pub left</div>
        <div className='col-8 bg-danger m-2 p-2'>
          <BlogItem />
        </div>
        <div className='col bg-primary m-2'>pub right</div>
      </div>
    </div>
  );
}
