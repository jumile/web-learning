<?php
$output=true;
$err='';
$name='';
$email='';
$course='';

if(!isset($_POST['submit'])) {
	$output=true;
} else { 
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$course = $_POST['course'];
	if(empty($name)) {
		$err = 'Заполните поле Имя!';  
		$output=true;
	}        
	if(empty($email)) {
		$err = $err . 'Заполните поле E-mail!';
		$output=true;
	} 
  	if(!empty($name) && !empty($email) && !empty($course) && empty($err)) {
		$epasts = 'newglads@yandex.ru';
		$theme = 'заказ на обучение';
		$message = <<<MES
		Имя: $name
		Почта: $email
		Курс: $course
MES;
		mail($epasts, $theme, $message);
		$output=false;
	} 
}
?>

