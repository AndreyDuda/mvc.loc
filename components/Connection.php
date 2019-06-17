<?php

namespace framework\components;

use PDO;

class Connection
{
	/** @var array|bool  */
	private $env;
	/** @var PDO */
	private $db;
	
	public function __construct()
	{
		$this->env = parse_ini_file('.env');
	}
	
	/**
	 * @return PDO
	 */
	public function queryBuilder(): PDO
	{
		$diver = $this->env['DB_DRIVER'];
		$host = $this->env['DB_HOST'];
		$port = $this->env['DB_PORT'];
		$dbName = $this->env['DB_DATABASE'];
		$user = $this->env['DB_USERNAME'];
		$password = $this->env['DB_PASSWORD'];
		
		return $this->db = new PDO("$diver:host=$host;port=$port;dbname=$dbName", $user ,$password);
	}
}