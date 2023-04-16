<?php
interface riva{
	public function rivarbaby();
}
class first implements riva{
	public function rivarbaby(){
		echo "abcd";
	}
}
class first1 implements riva{
	public function rivarbaby(){
		echo "def";
	}
}
class first2 implements riva{
	public function rivarbaby(){
		echo "efg";
	}
}
class first3 implements riva{
	public function rivarbaby(){
		echo "klmn";
	}
}
$baby1=new first();
$baby2=new first1();
$baby3=new first2();
$baby4=new first3();
//echo $baby1->rivarbaby();
$bacca=array($baby1,$baby2,$baby3,$baby4);
foreach($bacca as $babu){
	echo $babu->rivarbaby();
	echo "<br>";
}

?>
