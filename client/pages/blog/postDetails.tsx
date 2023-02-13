import React from 'react';

import PostHeader from '../../component/post/postHeader';
import PostComments from '../../component/post/postComments';
import { useRouter } from 'next/router';

const postDetails = () => {
  const router = useRouter();
  const post = router.query;
  console.log(post.post_id);

  return (
    <>
      <div className='card text-center'>
        <PostHeader post={post} />
      </div>
      <div className='card text-center'>
        <PostComments post_id={post.post_id} />
      </div>
    </>
  );
};

export default postDetails;
