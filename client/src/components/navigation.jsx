import React, { useContext } from 'react';
import { Link } from 'react-router-dom';
import { UserContext } from '../helpers/userContext';

/* Navbar links */
function Navigation() {
  /* user data from userContext */
  const { username, loggedIn } = useContext(UserContext);

  return (
    <nav className='navbar navbar-dark bg-body shadow-sm'>
      <div className='logo'>Logo</div>

      <div>
        <ul className='nav justify-content-end'>
          <li className='nav-item'>
            <Link className='nav-link' to='/'>
              About
            </Link>
          </li>
          <li className='nav-item'>
            <Link className='nav-link' to='/content'>
              Blog
            </Link>
          </li>

          {!loggedIn ? (
            <React.Fragment>
              <li className='nav-item'>
                <Link className='nav-link' to='/login'>
                  Login
                </Link>
              </li>
              <li className='nav-item'>
                <Link className='nav-link' to='/register'>
                  Register
                </Link>
              </li>
            </React.Fragment>
          ) : (
            <React.Fragment>
              <li className='nav-item'>
                <Link className='nav-link' to='/content'>
                  {username}
                </Link>
              </li>
              <li className='nav-item'>
                <Link className='nav-link' to='/logout'>
                  Logout
                </Link>
              </li>
            </React.Fragment>
          )}
        </ul>
      </div>
    </nav>
  );
}

export default Navigation;
