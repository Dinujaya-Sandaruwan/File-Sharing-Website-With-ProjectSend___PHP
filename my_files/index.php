<?php
	define('IS_TEMPLATE_VIEW', true);
    
    require_once '../bootstrap.php';
    
    $this_user = CURRENT_USER_USERNAME;
	if (!empty($_GET['client']) && CURRENT_USER_LEVEL != '0') {
        $this_user = $_GET['client'];
	}

    include_once TEMPLATE_PATH;