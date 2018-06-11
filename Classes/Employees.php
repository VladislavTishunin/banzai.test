<?php
class Employees{
	public static function getAll($link){
		$sql = 'SELECT * FROM `employees`';
		$result = $link->query($sql);
		if(!$result) die('Ошибка при получении списка сотрудников.');
		$employees = [];
		$size = $result->num_rows;
		for($i=1; $i<=$size;$i++){
			$row = $result->fetch_assoc();
			$row['num'] = $i;
			$employees[] = $row;
		}
		return $employees;
	}
	public static function get($link, $name, $position, $date, $sex){
		$name = $link->real_escape_string($name);
		$position = $link->real_escape_string($position);
		$date = $link->real_escape_string($date);
		$sex= $link->real_escape_string($sex);

		$sql = "SELECT * FROM `employees` WHERE `full_name`='$name' AND `position_title`='$position' AND `birthdate`='$date' AND `sex`='$sex' LIMIT 1";
		$result = $link->query($sql);
		//die($sql);
		if(!$result) die('Ошибка при поулчении информации о сотруднике.');
		
		$employee = $result -> fetch_assoc();
		return $employee;
	}
	public static function create($link, $name, $position, $date, $sex){
		$name = $link->real_escape_string($name);
		$position = $link->real_escape_string($position);
		$date = $link->real_escape_string($date);
		$sex= $link->real_escape_string($sex);

		$sql = "INSERT INTO `employees` (`full_name`, `position_title`, `birthdate`, `sex`) VALUES ('$name', '$position', '$date', '$sex')";
		$result = $link->query($sql);
		if(!$result) die('Ошибка при добавлении сотрудника');
		return true;
	}
	public static function edit($link, $name, $position, $date, $sex, $prev){
		$name = $link->real_escape_string($name);
		$position = $link->real_escape_string($position);
		$date = $link->real_escape_string($date);
		$sex= $link->real_escape_string($sex);
		$prevName = strip_tags($prev['n']);
		$prevPos = strip_tags($prev['p']);
		$prevDate = strip_tags($prev['bd']);
		$prevSex = strip_tags($prev['s']);
		$sql= "UPDATE `employees` SET `full_name`='$name', `position_title`='$position', `birthdate`='$date', `sex`='$sex' WHERE `full_name`='$prevName' AND `position_title`='$prevPos' AND `birthdate`='$prevDate' AND `sex`='$prevSex'";

		$result = $link->query($sql);
		if(!$result) die('Ошибка при редактировании данных сотрудника.');
		return true;
	}
}