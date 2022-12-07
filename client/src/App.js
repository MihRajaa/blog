import React, { useState } from 'react';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';

import Navigation from './components/navigation';
import Home from './pages/home';
import Login from './pages/login';
import Logout from './pages/logout';
import Register from './pages/register';
import Content from './pages/content';
import BlogDetails from './pages/blogDetails';
import { UserContext } from './helpers/userContext';
import { createBrowserHistory } from 'history';
import './App.css';

export const customHistory = createBrowserHistory();

function App() {
  const [username, setUsername] = useState('');
  const [loggedIn, setLoggedIn] = useState(false);

  /* 404 page display */
  const PageNotFound = () => {
    return (
      <div style={{ fontSize: '30px', margin: '2rem' }}>
        404! Page Not Found
      </div>
    );
  };

  /* customHistory manages the page navigation as par the browser 
     Preference. It ensures the virtual DOM is not rendered again and
     again if user uses the browser buttons.
     UserContext.Provider ensures that the value we pass can be consumed 
     within any of App’s descendant child components i.e. global variable 

     customHistory & UserContext.Provider wraps around different routes */
  return (
    <>
      <Router history={customHistory}>
        <div className='App'>
          <UserContext.Provider
            value={{ username, setUsername, loggedIn, setLoggedIn }}>
            <Navigation />
            <div className='container p-3 h-auto'>
              <div className='row p-2'>
                <div className='pub card col-sm4 m-2 vh-100'>pub left</div>
                <div className='border-0 text-center col-lg m-2 p-2 '>
                  <Routes>
                    <Route exact path='/' element={<Home />} />
                    <Route path='/blog/:id' element={<BlogDetails />} />
                    <Route path='/login' element={<Login />} />
                    <Route path='/register' element={<Register />} />
                    <Route path='/content' element={<Content />} />
                    <Route path='/logout' element={<Logout />} />
                    <Route element={<PageNotFound />} />
                  </Routes>
                </div>
                <div className='pub card col-sm4 m-2 vh-80'>pub right</div>
              </div>
            </div>
          </UserContext.Provider>
        </div>
      </Router>
    </>
  );
}

export default App;
