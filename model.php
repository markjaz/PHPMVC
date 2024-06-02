<?php
	// The model handles storage and retrieval of data.
	/* Standard PHP formatting:
	Class names use "StudlyCase" with run-together words, each of which is capitalized:
		ExampleClassName
		AnotherProperClassName
	Method names use "camelCase" with run-together words, with all but the first word capitalized:
		thisIsAMethod()
		anotherMethodName()
	*/
	class Model {
		public function getData(): array {
			$dsn = 'mysql:host=localhost;dbname=product_db;charset=utf8mb4';  // On port 3306.
			$pdo = new PDO($dsn, 'product_db_user', 'secret', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
			
			$stmt = $pdo->query("SELECT * FROM product");
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
			}
	}
