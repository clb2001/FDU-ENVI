<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		$makefoo = true; //�����ڴ˴�����foo()��������Ϊ���������ڣ������Ե���bar()����
		
		bar();
		echo "<br>";
		
		if ($makefoo) {  
			function foo()  {    
				echo "I don't exist until program execution reaches me.\n";  
			}
		}
		
		/* ���ڿ��԰�ȫ���ú��� foo()�ˣ���Ϊ $makefoo ֵΪ�� */
		
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
		/* ���ڻ����ܵ���bar1()��������Ϊ���������� */
		foo1();
		/* ���ڿ��Ե���bar1()�����ˣ���Ϊfoo()������ִ��ʹ��bar1()������Ϊ�Ѷ���ĺ��� */
		bar1();
	?>
  </body>
</html>
