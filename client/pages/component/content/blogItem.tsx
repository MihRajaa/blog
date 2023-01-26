import React from 'react';
import { useRouter } from 'next/router';

export default function BlogItem() {
  const router = useRouter();
  console.log(router.query);
  return <></>;
}
