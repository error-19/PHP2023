<?php
class Goodbye {
  const l = "Thank you for visitingW3Schools.com";}
echo Goodbye::l;
?>
<?php
	class goodby{
		const leaving_message="My name is shamim sorkar!";
		public function byebye(){
			echo self::leaving_message;
		}
	}
	$obj=new goodby();
	$obj->byebye();
?>