<?php
Class Database{
	private static $_instance;
	private $_connection;
	private $_host = 'localhost';
	private $_user = 'root';
	private $_password = '';
	private $_database = 'banzai';

	public static function getInstance(){
		if(!self::$_instance) self::$_instance = new self;
		return self::$_instance;
	}
	private  function __construct(){
		$this->_connection = new mysqli($this->_host, $this->_user, $this->_password, $this->_database);
		$this->_connection->set_charset("utf8");
		
		if($this->_connection->connect_error){
			trigger_error('Не удалось подключиться к базе данных');
		}
	}
	public function getConnection(){
		return $this->_connection;
	}
}