<?php   
    namespace Application\Model\Publication;
    
    use Application\Model\Connection\DBConnection;
        
    /** 
     * Manipulate the publications table
     */ 
    class Publication
    {   
        public $idPublication;
        public $idUser;
        public $idTypePublication;
        public $titlePublication;
        public $descriptionPublic;
        public $dateCreation;

        /**
         * @var values[]
         */
        public function insert(array $values)
        {
            $connection = new DBConnection();
            $result = $connection->query("INSERT INTO publications (idUser, idTypePublication, titlePublication,
            descriptionPublic) VALUES (:idUser, :idTypePublication, :titlePublication, :descriptionPublic)", $values);
        }

        /**
         * @var values[]
         */
        public function getPublications()
        {
            $connection = new DBConnection();
            $result = $connection->select("SELECT * FROM publications");

            if (!empty($result))	{
                return $result;
            }

            return null; 
        }

        public function deleteById($idPublication) {
            $connection = new DBConnection();
			$connection->query("DELETE FROM publications WHERE idPublication = :ID", [":ID" => $idPublication]);
		}
    }   
