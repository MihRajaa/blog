'use strict';
exports.__esModule = true;
exports.AppDataSource = void 0;
require('reflect-metadata');
var typeorm_1 = require('typeorm');
exports.AppDataSource = new typeorm_1.DataSource({
  type: 'mariadb',
  host: 'localhost',
  port: 3030,
  username: 'root',
  password: '123456789',
  database: 'blogdb',
  synchronize: true,
  logging: false,
});
