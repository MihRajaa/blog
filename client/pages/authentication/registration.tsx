import Link from 'next/link';
import React from 'react';

export default function Registration() {
  let userCreated = false;
  return (
    <div className='d-flex align-items-center flex-column py-3 bg-white'>
      {userCreated && (
        <>
          <div className='login-prompt'>
            <span>Welcome! You can</span> <Link href='/login'>Login</Link>
            <span> now.</span>
          </div>
        </>
      )}
      <div className=''>
        <form
          action='/register'
          method='POST'
          className='form-signin'
          id='registerformid'
          // onSubmit={(e) => registerUser(e)}
        >
          {/* form header */}
          <div className='register-header'>
            <h1 className='heading'>Register</h1>
            <h3>Let's get you started.</h3>
          </div>
          {/* form input username */}
          <div className='form-label-group p-3'>
            <input
              className='form-control my-2'
              type='username'
              id='username'
              name='username'
              placeholder='Name'
              autoComplete='off'
              // value={userRegister.username}
              // onChange={(e) => {
              //   handleInputChange(e);
              // }}
            />
            {/* {error.username && (
              <div className='text-danger'>{error.username}</div>
            )} */}
            {/* form input email */}
            <input
              className='form-control my-2'
              type='email'
              name='email'
              placeholder='Email'
              autoComplete='off'
              // value={userRegister.email}
              // onChange={(e) => {
              //   handleInputChange(e);
              // }}
            />
            {/* {error.email && <div className='text-danger'>{error.email}</div>} */}
            {/* form input password */}
            <input
              className='form-control my-2'
              type='password'
              id='password'
              name='password'
              placeholder='Password'
              autoComplete='off'
              // value={userRegister.password}
              // onChange={(e) => {
              //   handleInputChange(e);
              // }}
            />
            {/* {error.password && (
              <div className='text-danger'>{error.password}</div>
            )} */}
          </div>
          <input
            type='submit'
            value='Register'
            className='btn btn-lg btn-primary my-3'
            name=''
          />
        </form>
        <p className='registerLink'>
          Already have an account? <Link href='/login'>Sign In</Link>
        </p>
      </div>
    </div>
  );
}
