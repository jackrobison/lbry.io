<?php
include $_SERVER['ROOT_DIR'] . '/autoload.php';

define('IS_PRODUCTION', $_SERVER['SERVER_NAME'] == 'lbry.io');

i18n::register();
Session::init();
Controller::dispatch(strtok($_SERVER['REQUEST_URI'], '?'));