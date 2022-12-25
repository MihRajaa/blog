import React from 'react';

export default function ItemDetails() {
  return (
    <>
      <div className='blog-list'>
        <div className='blog-elems' key='id'>
          <h2 className='blog-title'> title</h2>
          <h6>date</h6>
          <div className='blog-list-body'>details</div>
        </div>
      </div>
    </>
  );
}
