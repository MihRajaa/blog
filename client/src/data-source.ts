import 'reflect-metadata';
import { DataSource } from 'typeorm';

export const AppDataSource = new DataSource({
  type: 'mariadb',
  host: 'db',
  port: 3306,
  username: 'root',
  password: 'root',
  database: 'blogdb',
  synchronize: true,
  logging: false,
});
