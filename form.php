<?php
$err='';
$name='';
	$email='';
	$type='';
	$comments='';
if(!isset($_POST['submit'])) {
    

} else { 
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$course = $_POST['course'];
	if(empty($name)) {
		$err = '<p>Заполните поле Имя!</p>';  
	}        
	if(empty($email)) {
		$err = $err . '<p>Заполните поле E-mail!</p>';
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
	} 
}
?>