import { useRouter } from 'next/router';
import React from 'react';
import { getComments } from '../../../api/storage';

export default function ItemDetails() {
  const router = useRouter();

  const post = router.query.post;
  const comment = getComments();

  return (
    <>
      <div className='bg-white'>
        <h2 className='blog-title'>{post}</h2>
        <h6>date</h6>
        <div className='blog-list-body'>{post}</div>
      </div>
    </>
  );
}
