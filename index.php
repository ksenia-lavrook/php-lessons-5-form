<?php
if (!empty($_POST)) {
	$message = "Вам пришло новое сообщение: \n"
	. "Имя пользователя: " . $_POST['userName'] . "\n"
	. "Email пользователя: " . $_POST['userEmail'] . "\n"
	. "Сообщение: \n " . $_POST['message'];
	$header = "From: ksenia.lavruk1@yandex.ru";
	$resultMail = mail("ksenia.lavruk@yandex.ru", "Сообщение с сайта", $message, $header);
	if ($resultMail) {
		echo "Сообщение отправлено успешно!";
	} else {
		echo "Что-то пошло не так!";
	}
}
?>

<form action="index.php" method="post">
	<input type="text" name="userName" placeholder="Ваше имя"><br>
	<input type="text" name="userEmail" placeholder="Ваш Email"><br>
	<textarea name="message" id="" cols="30" rows="10" placeholder="Сообщение"></textarea><br>
	<input type="submit" value="Отправить форму!">
</form>