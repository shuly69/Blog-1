<?php
const BASE_URL = '/';
const DB_HOST  = 'localhost';
const DB_NAME  = 'forum';
const DB_USER  = 'root';
const DB_PASS  = 'root';

require_once('core/router.php');
require_once('core/db.php');
require_once('models/news.php');
require_once('models/users.php');