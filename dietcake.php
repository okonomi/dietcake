<?php
/**
 * DietCake - Fastest MVC framework skeleton
 *
 * @copyright bunkyo-koki Co.,Ltd.
 * @license MIT License
 * @author Tatsuya Tsuruoka <http://github.com/ttsuruoka>
 */
mb_internal_encoding('UTF-8');
define('TIME_START', microtime(true));
define('DC_ACTION', 'dc_action');

define('DC_DIR', dirname(__FILE__).'/');
define('DC_CORE_DIR', DC_DIR.'src/DietCake/');
define('CONFIG_DIR', APP_DIR.'Config/');
define('CONTROLLERS_DIR', APP_DIR.'Controller/');
define('MODELS_DIR', APP_DIR.'Model/');
define('VIEWS_DIR', APP_DIR.'View/');
define('HELPERS_DIR', APP_DIR.'Helper/');
define('TMP_DIR', APP_DIR.'tmp/');
define('LOGS_DIR', TMP_DIR.'logs/');
define('LIB_DIR', ROOT_DIR.'Lib/');
define('VENDOR_DIR', ROOT_DIR.'Vendor/');
