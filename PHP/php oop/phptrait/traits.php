<?php
trait message1{
	public function mgs1(){
		echo "My name is shamim sorkar";
	}	
}
trait message2{
	public function mgs2(){
		echo "My wifename is Rizvy akter Riva";
	}	
}
class output{
	use message1;
}
 class output2{
	use message1,message2;
}
$obj=new output();
echo $obj->mgs1(),"<br>";
$obj2=new output2();
echo $obj2-> mgs1(),"<br>";
echo $obj2->mgs2();
?>