<?php 
    namespace app\model;

    class Categorie {
        private $db;

        public function __construct($db)
        {
            $this->db = $db;
        }

        public function getAllCategories()
        {
            $sql = "SELECT * FROM Categories";
            
            $stmt = $this->db->query($sql);
            $stmt->execute();

            return $stmt->fetchAll();

        }
    }
?>