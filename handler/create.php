<?php
require_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'Classes/Database.php');
require_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'Classes/Employees.php');
$link = Database::getInstance()->getConnection();
if(!empty($_POST)){
	$name = strip_tags($_POST['full_name']);
	$position = strip_tags($_POST['position']);
	$bdate = strip_tags($_POST['birthdate']);
	$sex = strip_tags($_POST['sex']);

	$bdate = date('Y-m-d', strtotime($bdate));

	Employees::create($link, $name, $position, $bdate, $sex);
	header('location:../');
}