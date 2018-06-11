<?php
class Positions{
	public static function getAll($link){
		$sql = 'SELECT * FROM `positions`';
		$result = $link->query($sql);
		if(!$result) die('Ошибка при получении спискадолджностей.');
		$positions = [];
		while($row = $result->fetch_assoc()){
			$positions[] = $row;
		}
		return $positions;
	}
}