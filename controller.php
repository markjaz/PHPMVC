<?php
	// The controller accepts requests from the user and returns an appropriate
	// response.  It decides what response to return based on which of its
	// actions are called by the requesting page.  For example, 'index.php'
	// might call the '$controller->index()' action which causes the
	// execution of the 'index()' method of the '$controller' instance of the
	// 'Controller' class.
	class Controller {
		// Note: functions/methods within controllers are called 'actions'.
		public function index() {
				require 'model.php';
				// Create a new instance of class 'Model':
				$model = new Model();
				// Call the 'getData()' method on the '$model' instance:
				$products = $model->getData();
				require 'view.php';
		}
		
	}
	// Note: The closing php tag ___must be omitted___ from files that contain
	// PHP code only.