<?php
switch ($_POST['mode']) {
	case 'login':
		echo '
		<h1>Авторизация</h1>
		<div>
			<form method="POST" action="index.php">
				<label>Введите логин</label>
				<input type="text" name="login" required> <br/>
				<label>Введите пароль</label>
				<input type="text" name="pass" required><br/>
				<input type="submit">
			</form>
		</div>
		';
	break;
	case 'signin':
		echo '
		<h1>Регистрация</h1>
		<div>
			<form method="POST" action="index.php>
				<label>Введите имя</label>
				<input type="text" required><br/>
				<label>Введите фамилию</label>
				<input type="text"><br/>
				<label>Введите электронную почту</label>
				<input type="email" required><br/>
				<label>Введите логин</label>
				<input type="text" required><br/>
				<label>Введите пароль</label>
				<input type="text" required><br/>
				<label>Дата рождения</label>
				<input type="date"><br/>
				<label>Загрузите фото</label>
				<input type="file" ><br/>
				<input type="submit">
			</form>
		</div>
		';

}