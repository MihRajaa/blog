import React, { useContext, useState } from 'react';
import Validate from '../middleware/validate';
import Axios from 'axios';
import { UserContext } from '../helpers/userContext';
import Home from './home';
import { Link } from 'react-router-dom';
import baseUrl from '../helpers/baseUrl';

/* Login page */
function Login() {
  const { loggedIn, setUsername, setLoggedIn } = useContext(UserContext);

  const [userLogin, setUserLogin] = useState({
    email: '',
    password: '',
  });

  const [error, setError] = useState({
    email: '',
    password: '',
    username: '',
  });

  /* gets the validation error message from Validate component
       and sets the error property and the user input details */
  function handleInputChange(event) {
    const errorMsg = Validate(event);
    setError({ ...error, [event.target.name]: errorMsg });
    setUserLogin({ ...userLogin, [event.target.name]: event.target.value });
  }

  /* login user */
  const loginUser = async (e) => {
    e.preventDefault();
    try {
      await Axios.post('http://localhost/blog/phpbb/ucp.php?mode=login', {
        username: e.target[0].defaultValue,
        password: e.target[1].defaultValue,
      }).then((response) => {
        // if (response.data.username == 'request failed') {
        //   setLoggedIn(false);
        // } else {
        //   setUsername(response.data.username);
        //   setLoggedIn(false);
        // }
        console.log(response.data);
      });
    } catch (err) {
      console.log(err);
    }
  };

  /* if user is not logged in Login page is displayed, after login Home page is rendered */
  return (
    <>
      {!loggedIn ? (
        <div className='d-flex align-items-center flex-column py-3 bg-white'>
          <form
            action='/login'
            method='POST'
            className='form-signin'
            id='loginformid'
            onSubmit={(e) => loginUser(e)}>
            <div className='text-center mb-4'>
              <h1 className='h3 mb-3 font-weight-normal'>Login</h1>
              <p>Welcome back! Please log in.</p>
            </div>
            <div className='form-label-group p-3'>
              <input
                type='text'
                className='form-control'
                name='email'
                placeholder='Email'
                autoComplete='off'
                value={userLogin.username}
                onChange={(e) => {
                  handleInputChange(e);
                }}
              />
              {error.email && <div className='errorDiv'>{error.email}</div>}
            </div>
            <div className='form-label-group p-3'>
              <input
                type='password'
                className='form-control'
                id='password'
                name='password'
                placeholder='Password'
                autoComplete='off'
                value={userLogin.password}
                onChange={(e) => {
                  handleInputChange(e);
                }}
              />
              {error.password && (
                <div className='errorDiv'>{error.password}</div>
              )}
            </div>
            <input
              type='submit'
              value='Login'
              className='btn btn-lg btn-primary my-3'
              name=''
            />
          </form>
          <p className='loginLink'>
            Don't have an account? <Link to='/register'>Sign Up</Link>
          </p>
        </div>
      ) : (
        <Home />
      )}
    </>
  );
}
export default Login;
