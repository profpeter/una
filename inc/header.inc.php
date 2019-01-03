<?php
define('BX_DOL', 1);
define('BX_DOL_URL_ROOT', 'https://coreplatform.herokuapp.com//'); ///< site url
define('BX_DIRECTORY_PATH_ROOT', '/app/'); ///< site path
define('BX_DATABASE_HOST', 'us-cdbr-iron-east-01.cleardb.net'); ///< db host
define('BX_DATABASE_SOCK', ''); ///< db socket
define('BX_DATABASE_PORT', '50473'); ///< db port
define('BX_DATABASE_USER', 'b6af8be58cceff'); ///< db user
define('BX_DATABASE_PASS', '127e15b3'); ///< db password
define('BX_DATABASE_NAME', 'heroku_1d3a86772ffdce1'); ///< db name
define('BX_SYSTEM_JAVA', ''); ///< path to java binary
define('BX_SYSTEM_FFMPEG', '/app/plugins/ffmpeg/ffmpeg.exe'); ///< path to ffmpeg binary
define('BX_DOL_SECRET', 'Cm8K8nrW?bW'); ///< secret word
define('BX_DB_FULL_VISUAL_PROCESSING', true); ///< upon db error - show error message
define('BX_DB_FULL_DEBUG_MODE', true); ///< upon db error - show detailed report (turn off in production mode)
define('BX_DB_DO_EMAIL_ERROR_REPORT', true); ///< upon db error - send email with detailed report
error_reporting(E_ALL);
mb_internal_encoding('UTF-8');
mb_regex_encoding('UTF-8');
date_default_timezone_set('UTC');
require_once('params.inc.php');
bx_check_maintenance_mode (true);
bx_check_minimal_requirements(true);
bx_check_redirect_to_correct_hostname(true);
bx_check_redirect_to_remove_install_folder(true);
