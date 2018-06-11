<html>
<head>
	<title><?=$_GET['n'];?> - Редактировать</title>
	<link href="style/main.css" rel="stylesheet">
</head>
	<body>
		<div id="page_align">

			<form action="../handler/edit.php?n=<?=$employee['full_name'];?>&bd=<?=$employee['birthdate'];?>&p=<?=$employee['position_title'];?>&s=<?=$employee['sex'];?>" method="POST" id="edit_form">
				<p id="form_title">Редактирование данных</p>
				<label>
					<p>Полное имя сотрудника</p>
					<input type="text" name="full_name" placeholder="ФИО" value="<?=$employee['full_name'];?>" required>
				</label>
				<label>
					<p>Должность</p>
					<select name="position" required>
						<?php foreach($position as $p):?>
							<option value="<?=$p['position_title'];?>" <?php if($p['position_title']===$employee['position_title']):?>selected <?php endif;?>><?=$p['position_title'];?></option>
						<?php endforeach;?>
					</select>
				</label>
				<label>
					<p>Дата рождения</p>
					<input type="date" name="birthdate" value="<?=$employee['birthdate'];?>" required>
				</label>
				
					<p>Пол</p>
				<label>
	              	<span class="label">      
	              		<input class="checkbox" type="radio" name="sex" value="Женский" <?php if($employee['sex']=='Женский'):?> checked <?php endif;?> required>
	                    <span class="checkbox-custom"></span>
	                	<span>Женский</span>
	            	</span>
                </label>

				<label>
	              	<span class="label">      
	              		<input class="checkbox" type="radio" name="sex" value="Мужской" <?php if($employee['sex']=='Мужской'):?> checked <?php endif;?> >
	                    <span class="checkbox-custom"></span>
	                	<span>Мужской</span>
	            	</span>
                </label>

				<input type="submit" value="Изменить" id="submit">
			</form>
		</div>
	</body>
</html>