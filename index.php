<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/Classes/Database.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/Classes/Employees.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/Classes/Positions.php');
$link = Database::getInstance()->getConnection();

$action = isset($_GET['act'])? $_GET['act'] : false ;
if($action === 'create'){
	$position = Positions::getAll($link);
	include($_SERVER['DOCUMENT_ROOT'].'/views/create.php');
}
elseif($action === 'edit'){
	$employee = Employees::get($link, $_GET['n'], $_GET['p'], $_GET['bd'], $_GET['s']);
	$position = Positions::getAll($link);
	include($_SERVER['DOCUMENT_ROOT'].'/views/edit.php');
}
else{
	$employees = Employees::getAll($link);
	include($_SERVER['DOCUMENT_ROOT'].'/views/employees_list.php');
}

