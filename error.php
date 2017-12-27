<?php

	/* define page vars */
	$include_path = '';
	$page_title = "Explorer 1 - Page Not Found";
	$page_id = 'error';
	$theme = 'light_background'; //dark_background || light_background
	$include_other = "";

	require_once($include_path . 'includes/smarty.inc.php');

	$errorMessage = NULL;
	$smarty = new SmartyVoyager($include_path);

	$smarty->assign("ERROR_MESSAGE",$errorMessage);
	$smarty->assign("DATE", date_format(date_create(),"F j, Y"));

	//$smarty->display($include_path . '_templates/error.tpl');
	$body = $smarty->fetch($include_path . '_templates/error.tpl');
	
	include_once($include_path . 'includes/header.inc.php');
	echo $body;
	
?>

	<!-- END CONTENT -->
<?php include_once($include_path . 'includes/footer.inc.php'); ?>
</html>