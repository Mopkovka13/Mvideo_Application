<?php
require_once(dirname(dirname(__FILE__)) . "/include/config.php");
require_once(USER_APP_PATH . "index.php");
require_once(STATIC_PATH . 'template/header.php');
require_once(STATIC_PATH . 'template/footer.php');
UserAction::signOut();