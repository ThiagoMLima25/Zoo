<?php
	namespace Application\Model\Connection;
	use PDO;
	/**
	 * Connect and manipulate data base
	 */
	class Session
	{
        public function __construct() {
            session_start();
        }

        public function cleanSession() {
            session_destroy();
            session_unset();
            $_SESSION = [];
        }
    }
?>