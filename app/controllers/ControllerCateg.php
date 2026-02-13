<?php 
    namespace app\controllers;

    use flight\Engine;
    use app\model\Categorie;
    use Flight;

    class ControllerCateg {
        protected Engine $app;
        private $db;
        private $categorieModel;

        public function __construct(Engine $app)
        {
            $this->app = $app;
            $this->categorieModel = new Categorie(Flight::db());
        }

        public function getCategories()
        {

            $categories = $this->categorieModel->getAllCategories();
            $this->app->render('index', ['categories' => $categories]);
            
        }
    }
    

?>