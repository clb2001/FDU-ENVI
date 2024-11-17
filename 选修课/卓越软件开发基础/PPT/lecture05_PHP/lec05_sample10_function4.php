<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		
		$message = 'hello';
		// 没有 "use"

		$example = function () {    
			var_dump($message);
		};
		
		//Notice: Undefined variable: message;NULL
		echo $example();
		
		/////////////////////////////////////////////////////////
		
		$message = 'hello';
		
		// 没有 "use"
		$example = function ($message) {    
			var_dump($message);
		};
		
		//string(5) "hello"
		echo $example($message);
		
		// Reset message
		$message = 'world';
		
		//string(5) "world"
		echo $example($message);
		
		/////////////////////////////////////////////////////////
		
		$message = 'hello';
		
		// 继承 $message
		$example = function () use ($message) {    
			var_dump($message);
		};
		
		//string(5) "hello"
		echo $example();
		
		// Inherited variable's value is from when the function is defined, not when called
		$message = 'world';
		
		//string(5) "hello"
		echo $example();
		
		////////////////////////////////////////////////////////
		
		$message = 'hello';
		
		// Inherit by-reference
		$example = function () use (&$message) {    
			var_dump($message);
		};
		
		//string(5) "hello"
		echo $example();
		
		// The changed value in the parent scope is reflected inside the function call
		$message = 'world';
		
		//string(5) "world"
		echo $example();
		
		////////////////////////////////////////////////////////
		// Closures can also accept regular arguments
		
		$example = function ($arg) use ($message) {    
			var_dump($arg . ' ' . $message);
		};
		
		//string(11) "hello world"
		$example("hello");
	?>
  </body>
</html>
