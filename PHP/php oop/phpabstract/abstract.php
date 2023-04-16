<?php
abstract class village{
	public $tutorial;
	public function __construct($name){
		$this->tutorial=$name;
	}
	abstract public function message();
}
class phptute extends village{
	public function message(){
		return "Thank for watching my ".$this->tutorial."video.";
	}
}
$php=new phptute("PHP");
echo $php->message();
?>
