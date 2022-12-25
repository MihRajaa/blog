import type { AppProps } from 'next/app';
import 'bootstrap/dist/css/bootstrap.css';
import 'reflect-metadata';

import Layout from './layout';

export default function App({ Component, pageProps }: AppProps) {
  return (
    <>
      <Layout>
        <Component {...pageProps} />
      </Layout>
    </>
  );
}
