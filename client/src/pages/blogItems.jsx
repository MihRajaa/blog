import React, { useState, useEffect } from 'react';
import Axios from 'axios';
import DateFormater from '../helpers/dateFormater';
import { Link } from 'react-router-dom';
import baseUrl from '../helpers/baseUrl';

import data from '../tweetter-result';

/* lists all the blog articles in a clipped format */
function BlogItems() {
  const [blogList, setBlogList] = useState([]);
  const [loading, setLoading] = useState(false);

  /* GETs all the blog articles */
  const getBlogList = async () => {
    try {
      setLoading(false);
      //   await Axios.get('../../tweetter-result.json').then((res) => {
      //     setBlogList(res.data);
      //     setLoading(false);
      //   });
      setBlogList(data);
    } catch (err) {
      console.log(err);
    }
  };

  console.log(
    'blogList',
    blogList.map((blog) => blog)
  );

  useEffect(() => {
    getBlogList();
  }, []);

  return (
    <div className='blog-list'>
      {loading ? (
        <>
          <div className='loading'>Loading..</div>
        </>
      ) : (
        <>
          <div className='inner-container'>
            <div className='blog-elems'>
              <div className='blog-title'>
                {blogList.map((blog) => {
                  return (
                    <div className='bg-white' key={blog.id}>
                      {blog.user.name}
                    </div>
                  );
                })}
              </div>
            </div>
          </div>
        </>
      )}
    </div>
  );
}

export default BlogItems;
