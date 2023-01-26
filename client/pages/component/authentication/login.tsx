import Link from 'next/link';
import React from 'react';
import Home from '../../index';

export default function Login() {
  let loggedIn = false;
  return (
    <>
      {!loggedIn ? (
        <div className='d-flex align-items-center flex-column py-3 bg-white'>
          <form
            action='/login'
            method='POST'
            className='form-signin'
            id='loginformid'
            // onSubmit={(e) => loginUser(e)}
          >
            <div className='text-center mb-4'>
              <h1 className='h3 mb-3 font-weight-normal'>Login</h1>
              <p>Welcome back! Please log in.</p>
            </div>
            <div className='form-label-group p-3'>
              <input
                type='text'
                className='form-control'
                name='username'
                placeholder='Username'
                autoComplete='off'
                // value={userLogin.username}
                // onChange={(e) => {
                //   handleInputChange(e);
                // }}
              />
              {/* {error.email && <div className='errorDiv'>{error.email}</div>} */}
            </div>
            <div className='form-label-group p-3'>
              <input
                type='password'
                className='form-control'
                id='password'
                name='password'
                placeholder='Password'
                autoComplete='off'
                // value={userLogin.password}
                // onChange={(e) => {
                //   handleInputChange(e);
                // }}
              />
              {/* {error.password && (
              <div className='errorDiv'>{error.password}</div> )}*/}
            </div>
            <input
              type='submit'
              value='Login'
              className='btn btn-lg btn-primary my-3'
              name=''
            />
          </form>
          <p className='loginLink'>
            Don't have an account? <Link href='/register'>Sign Up</Link>
          </p>
        </div>
      ) : (
        <Home />
      )}
    </>
  );
}
