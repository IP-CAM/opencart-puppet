<?php
// DIR
define('DIR_APPLICATION', '<%= location %>/catalog/');
define('DIR_SYSTEM', '<%= location %>/system/');
define('DIR_DATABASE', '<%= location %>/system/database/');
define('DIR_LANGUAGE', '<%= location %>/catalog/language/');
define('DIR_TEMPLATE', '<%= location %>/catalog/view/theme/');
define('DIR_CONFIG', '<%= location %>/system/config/');
define('DIR_IMAGE', '<%= location %>/image/');
define('DIR_CACHE', '<%= location %>/system/cache/');
define('DIR_DOWNLOAD', '<%= location %>/download/');
define('DIR_LOGS', '<%= location %>/system/logs/');

// DB
define('DB_DRIVER', 'mysql');
define('DB_HOSTNAME', '<%= db_host %>');
define('DB_USERNAME', '<%= db_username %>');
define('DB_PASSWORD', '<%= db_password %>');
define('DB_DATABASE', '<%= db_database %>');
define('DB_PREFIX', '');
?>