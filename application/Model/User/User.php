<?php
    namespace Application\Model\User;

    use Application\Model\Connection\DBConnection;

    /**
     * Manipulate user table
     */
    class User
    {
        public $idUser;
        public $firstNameUser;
        public $LastNameUser;
        public $loginUser;
        public $passwordUser;
        public $emailUser;
        public $dateCreationUser;

        /**
		 * @var login
		 * @var password
		 * @return User[]
		 */
		public function findByLoginByPassword($login, $password)
		{
			$connection = new DBConnection();
			$result = $connection->select("SELECT * FROM users WHERE loginUser = :loginUser AND passwordUser = :passwordUser", [":loginUser" => $login, ":passwordUser" => $password]);

            if (!empty($result[0]))	{
				return $result[0];
			}
			return null; 
		}
    }
