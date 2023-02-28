'use strict';
'use strict';
exports.__esModule = true;
exports.AppDataSource = void 0;
require('reflect-metadata');
var typeorm_1 = require('typeorm');
exports.AppDataSource = new typeorm_1.DataSource({
  type: 'mariadb',
  host: 'db',
  port: 3306,
  username: 'root',
  password: 'root',
  database: 'blogdb',
  synchronize: true,
  logging: false,
});
