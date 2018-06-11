<html>
<head>
	<title>Добавление сотрудника</title>
	<link href="style/main.css" rel="stylesheet">
</head>
	<body>
		<div id="page_align">
			<form action="../handler/create.php" method="POST" id="create_form">
				<p id="form_title">Добавление сотрудника</p>
				<label>
					<p>Полное имя сотрудника</p>
					<input type="text" name="full_name" placeholder="ФИО" required>
				</label>
				<label>
					<p>Должность</p>
					<select name="position" required>
						<option selected>Не выбрано</option>
						<?php foreach($position as $p):?>
							<option value="<?=$p['position_title'];?>"><?=$p['position_title'];?></option>
						<?php endforeach;?>
					</select>
				</label>
				<label>
					<p>Дата рождения</p>
					<input type="date" name="birthdate" required>
				</label>
				
				<p>Пол</p>
				<label>
	              	<span class="label">      
	              		<input class="checkbox" type="radio" name="sex" value="Женский" checked>
	                    <span class="checkbox-custom"></span>
	                	<span>Женский</span>
	            	</span>
                </label>

				<label>
	              	<span class="label">      
	              		<input class="checkbox" type="radio" name="sex" value="Мужской">
	                    <span class="checkbox-custom"></span>
	                	<span>Мужской</span>
	            	</span>
                </label>
				<input type="submit" value="Добавить" id="submit">
			</form>
		</div>
	</body>
</html>