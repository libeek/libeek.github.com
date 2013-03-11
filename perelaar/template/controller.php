<?php	
	$page = $_REQUEST['page'];
	$lang = $_REQUEST['lang'];
	
	// Check for valid page.
	if (!file_exists('../' . $page . '.php')) {
		$page = 'home';
	}
	
	require('functions.php');

	global $title;
	
	if ($lang == '') {
		$lang = 'nl';
		require('../' . $page . '.php');
	}
	else {
		require('../' . $page . '_' . $lang . '.php');
	}

	require('template.php');
?>