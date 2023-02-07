import type { AppProps } from 'next/app';
import 'bootstrap/dist/css/bootstrap.css';
import 'reflect-metadata';

import Layout from '../component/layout';
import { Provider } from 'react-redux';
import store from '../redux/app/store';

export default function App({ Component, pageProps }: AppProps) {
  return (
    <Provider store={store}>
      <Layout>
        <Component {...pageProps} />
      </Layout>
    </Provider>
  );
}
