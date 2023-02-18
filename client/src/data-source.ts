import 'reflect-metadata';
import { DataSource } from 'typeorm';

export const AppDataSource = new DataSource({
  type: 'mariadb',
  host: 'localhost',
  port: 3030,
  username: 'root',
  password: '123456789',
  database: 'blogdb',
  synchronize: true,
  logging: false,
});
