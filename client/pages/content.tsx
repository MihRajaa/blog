import React from 'react';

import BlogItem from './component/content/blogItem';
import { useAppSelector } from '../redux/app/store';

export default function Content() {
  const data = useAppSelector((state) => state.postsReducer.postsState);

  console.log('data', data);
  return (
    <div className='d-grid'>
      <div className='row justify-content-around m-3'>
        <div className='col bg-primary m-2'>pub left</div>
        <div className='col-8 bg-danger m-2 p-2'>
          {/* {data.map((post: any) => {
            return <BlogItem key={post.id} />;
          })} */}
        </div>
        <div className='col bg-primary m-2'>pub right</div>
      </div>
    </div>
  );
}
