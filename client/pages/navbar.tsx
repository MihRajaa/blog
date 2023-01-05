import React from 'react';
import Link from 'next/link';

/* Navbar links */
function Navbar() {
  /* user data from userContext */
  let loggedIn = false;

  return (
    <nav className='navbar navbar-dark bg-body shadow-sm'>
      <div className='logo'>Logo</div>

      <div>
        <ul className='nav justify-content-end'>
          <li className='nav-item btn btn-outline-primary'>
            <Link className='text-decoration-none' href='/'>
              Blog
            </Link>
          </li>

          {!loggedIn ? (
            <>
              <li className='nav-item btn btn-outline-primary'>
                <Link
                  className='text-decoration-none'
                  href='/component/authentication/login'
                  id='login'>
                  Login
                </Link>
              </li>
              <li className='nav-item btn btn-outline-primary'>
                <Link
                  className='text-decoration-none '
                  href='/component/authentication/registration'>
                  Register
                </Link>
              </li>
            </>
          ) : (
            <>
              <li className='nav-item btn btn-outline-primary'>
                <Link
                  className='text-decoration-none'
                  href='/component/authentication/profile'>
                  username
                </Link>
              </li>
              <li className='nav-item btn btn-outline-primary'>
                <Link
                  className='text-decoration-none'
                  href='/component/authentication/logout'>
                  Logout
                </Link>
              </li>
            </>
          )}
        </ul>
      </div>
    </nav>
  );
}

export default Navbar;
