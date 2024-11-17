<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		
		abstract class AbstractClass{ 
			// 强制要求子类定义这些方法    
			abstract protected function getValue();    
			abstract protected function prefixValue($prefix);    
			
			// 普通方法（非抽象方法）    
			public function printOut() {        
				print $this->getValue() . "<br>";    
			}
		}
		
		class ConcreteClass1 extends AbstractClass{    
			protected function getValue() {        
				return "ConcreteClass1";    
			}    
			
			public function prefixValue($prefix) {        
				return "{$prefix}ConcreteClass1";    
			}
		}

		$class1 = new ConcreteClass1;
		//ConcreteClass1
		$class1->printOut();
		//FOO_ConcreteClass1
		echo $class1->prefixValue('FOO_') . "<br>";

	?>
  </body>
</html>
