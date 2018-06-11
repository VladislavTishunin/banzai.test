<html>
<head>
	<title>Сотруднки</title>
	<link href="style/main.css" rel="stylesheet">
</head>
	<body>
		<div id="page_align">
			<div id="wdth">
				<a href="?act=create" id="add">+ Добавить сотрудника</a>
				<button id="button" onclick="open_add();">Показать доп. Информацию</button>
			</div>
			<div id="list">
				<div id="title">
						<div class="info head">
							<div class="actions">Действие</div>
							<div class="number">№</div>
							<div class="name">ФИО</div>
							<div class="position">Должность</div>
							<div id="birthdate">Дата рождения</div>
							<div id="sex">Пол</div>
						</div>
				</div>
				<?php foreach($employees as $e):?>
					<div id="row">
						<div class="info">
							<div class="actions">
								<a href="?act=edit&n=<?=$e['full_name'];?>&bd=<?=$e['birthdate'];?>&p=<?=$e['position_title'];?>&s=<?=$e['sex'];?>">Редактирвоать</a>
							</div>
							<div class="number"><?=$e['num'];?></div>
							<div class="name"><?=$e['full_name'];?></div>
							<div class="position"><?=$e['position_title'];?></div>
							<div id="birthdate"><?=$e['birthdate'];?></div>
							<div id="sex"><?=$e['sex'];?></div>
						</div>
					</div>
				<?php endforeach;?>
			</div>
		</div>
		<script>
			function close_add(){
				var list_sex = document.querySelectorAll('#sex');
				var list_date = document.querySelectorAll('#birthdate');
				for(i=0; i<list_sex.length; i++){
					list_sex[i].style.display='none'; 
 					list_date[i].style.display='none';   
				}
				var button = document.getElementById('button');
				button.innerHTML = 'Показать доп. Информацию';
				button.setAttribute('onclick', 'open_add();')

			}
			function open_add(){
				var list_sex = document.querySelectorAll('#sex');
				var list_date = document.querySelectorAll('#birthdate');
				for(i=0; i<list_sex.length; i++){
					list_sex[i].style.display='flex'; 
 					list_date[i].style.display='flex';   
				}
				var button = document.getElementById('button');
				button.innerHTML = 'Скрыть доп. Информацию';
				button.setAttribute('onclick', 'close_add();')
			}
		</script>
	</body>
</html>