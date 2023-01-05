import express, { Request, Response } from 'express';
import next from 'next';

import { AppDataSource as myDataSource } from './data-source';

const dev = process.env.NODE_ENV !== 'production';
const cors = require('cors');
const app = next({ dev });
const handle = app.getRequestHandler();

// establish database connection
myDataSource
  .initialize()
  .then(() => {
    console.log('Data Source has been initialized!');
  })
  .catch((err) => {
    console.error('Error during Data Source initialization:', err);
  });

// create and setup express app
const server = express();

server.use(cors());

server.get('/posts', async function (req: Request, res: Response) {
  const allposts = await myDataSource
    .createQueryBuilder()
    .select()
    .from('phpbb_posts', null)
    .getRawMany();
  res.json(allposts);
  return handle(req, res);
});

server.listen(4000, (err?: any) => {
  if (err) throw err;
  console.log('> Ready on http://localhost:4000');
});
