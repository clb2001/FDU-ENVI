<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		$makefoo = true; //不能在此处调用foo()函数，因为它还不存在，但可以调用bar()函数
		
		bar();
		echo "<br>";
		
		if ($makefoo) {  
			function foo()  {    
				echo "I don't exist until program execution reaches me.\n";  
			}
		}
		
		/* 现在可以安全调用函数 foo()了，因为 $makefoo 值为真 */
		
		if ($makefoo) 
			foo();
		echo "<br>";

		function bar(){  
			echo "I exist immediately upon program start.\n";
		}
			
		//////////////////////////////////////////////////////////
		
		function foo1(){  
			function bar1() {    
				echo "I don't exist until foo() is called.\n";  
			}
		}
		/* 现在还不能调用bar1()函数，因为它还不存在 */
		foo1();
		/* 现在可以调用bar1()函数了，因为foo()函数的执行使得bar1()函数变为已定义的函数 */
		bar1();
	?>
  </body>
</html>
