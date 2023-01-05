import React from 'react';

import ItemDetails from './itemDetails';
// import { allPosts } from '../../../redux/slices/postsSlice';

export default function BlogItem() {
  return (
    <>
      <div className='inner-container'>
        <div className='blog-elems'>
          <div className='blog-title'>
            {/* {blogList.map((blog) => {
                return ( */}
            <div className='bg-white' key=''>
              <ItemDetails />
            </div>
            {/* );
              })} */}
          </div>
        </div>
      </div>
    </>
  );
}
