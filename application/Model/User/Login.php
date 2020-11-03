<?php
    namespace Application\Model\User;

    class Login extends User
    {
        private $_user;
        private $_password;

        public function setLoggedUser($user) 
        {
            $this->_user = $user;
        }

        public function getLoggedUser()
        {
            return $this->_user;
        }

        public function __construct($user, $password)
        {
            if (!empty($user) && !empty($password)) {
                $items = $this->findByLoginByPassword($user, $password);
                $this->setLoggedUser($items);
            }
        }
        
    }
