import React, { useEffect } from 'react';
import { useAppDispatch } from '../redux/app/store';
import { getPosts } from '../redux/slices/postsSlice';
import Content from './content';

export default function Home() {
  const dispatch = useAppDispatch();

  useEffect(() => {
    dispatch(getPosts());
  }, [dispatch]);

  return (
    <div className='container-fluid'>
      <Content />
    </div>
  );
}
