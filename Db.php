<?php
	/**
	 * A db class based on PDO
	 */
	class Db {
		public $_error;
		public $_connector;
		
		public function __construct($host, $db, $user, $password) {
			try{
				$this->_connector = new PDO("mysql:host=$host;dbname=$db",$user, $password);
			}
			catch(PDOException $e){
				$this->_error = "Failed to connect to Db";
			}
		}
		
		/**
		 * Used to select record from a table
		 * @param String $table the db table 
		 * @param Array $columns the columns needed from the table
		 * @param Array $where columns [colName1=>colValue1, ...colNamen=>colValuen]
		 * @return Array $records
		 */
		public function getData($table, $columns = [], $where = []){
			$records = [];
			$connector = $this->_connector;
			$cols = "*";
			if($columns){
				$cols = "";
				foreach ($columns as $aColumn) {
					$cols .="$aColumn, ";
				}
				$cols = rtrim($cols, ", ");
			}
			$whereClause = "";
			if($where){
				$whereClause = "WHERE ";
				foreach ($where as $colName => $colValue) {
					$whereClause .="$colName = '$colValue' AND ";
				}
				$whereClause = rtrim($whereClause, "AND ");
			}
			$sql = "SELECT $cols FROM $table $whereClause";
		
			$stmt = $connector->prepare($sql);
			// perform query
			$stmt->execute();
			
			$records = $stmt->fetchAll($connector::FETCH_ASSOC);
			return $records;
		}
		
	}
	