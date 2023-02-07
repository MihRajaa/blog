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
      <div className='d-grid'>
        <div className='row justify-content-around m-3'>
          <div className='col bg-primary m-2'>pub left</div>
          <Content />
          <div className='col bg-primary m-2'>pub right</div>
        </div>
      </div>
    </div>
  );
}
