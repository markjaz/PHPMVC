<?php
	require('controller.php');
	// Create a new controller instance:
	$controller = new Controller();
	// Call the 'index()' action on the new controller instance:
	$controller->index();  // The 'index()' action in turn calls
	// '$model->getData()' which retrieves data from a database and returns
	// it in a variable '$products' to the controller.  Te controller
	// requires the 'view.php' file that formats and displays the data in the
	// '$products' array.