<?php
	namespace Application\Model\Connection;
	use PDO;
	/**
	 * Connect and manipulate data base
	 */
	class DBConnection extends PDO
	{
		private $connection;

		/**
		 * @var $host
		 * @var $dataBaseName
		 * @var $userName
		 * @var $password
		 */
		function __construct($host = "127.0.0.1", $dataBaseName = "zoo", $userName = "root", $password = "")
		{
			try {
				$opcoes = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        		$this->connection = new PDO("mysql:host=$host;dbname=$dataBaseName", $userName, $password, $opcoes);
			} catch (PDOException $e) {
			    echo 'ERROR: ' . $e->getMessage();
			}
		}

		/**
		 * @var $statement
		 * @var $parameters
		 */
		public function query($rawQuery, $parameters = [])
		{
			$statement = $this->connection->prepare($rawQuery);

			$this->setParams($statement, $parameters);
			$statement->execute();
			return $statement;
		}

		/**
		 * @var $statement
		 * @var $parameters
		 */
		private function setParams($statement, $parameters = []) {
			foreach ($parameters as $key => $itemsParameters) {
				$this->setParam($statement, $key, $itemsParameters);
			}
		}

		/**
		 * @var $statement
		 * @var $key
		 * @var $parameter
		 */
		private function setParam($statement, $key, $parameter) {
			$statement->bindParam($key, $parameter);
		}

		/**
		 * @var $rawQuery
		 * @var $parameters
		 */
		public function select($rawQuery, $parameters = []):array {
			$statement = $this->query($rawQuery, $parameters);

			return $statement->fetchAll(PDO::FETCH_ASSOC);
		}
	}
?>