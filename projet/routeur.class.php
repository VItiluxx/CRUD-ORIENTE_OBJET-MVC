<?php

    include(CONTROLLER_ROOT."MainController.class.php");
    include(CONTROLLER_ROOT."FormulaireController.class.php");
    include(CONTROLLER_ROOT."IndexController.class.php");
    include(CONTROLLER_ROOT."TraitementsController.class.php");
    include(CONTROLLER_ROOT."DpdfController.class.php");


    class Routeur 
    {
        private $requette;
        private $route = [
                          "index.php" =>                ["controller" => "IndexController",    "method" => "getAffichePageIndex"],
                          "formulaire.php" =>           ["controller" => "FormulaireController", "method" => "getAffichePageFormulaire"],
                          "acceuil.php" =>              ["controller" => "MainController",    "method" => "getAffichePageMain"],
                          "traitements.php" =>          ["controller" => "MainController",    "method" => "getAffichePageTraitements"],
                          "downloadpdf.php" =>          ["controller" => "MainController",    "method" => "getAffichePageDownloadpdf"],

                          "formulaire" =>               ["controller" => "FormulaireController", "method" => "getAffichePageFormulaire"],
                          "acceuil" =>                  ["controller" => "MainController",    "method" => "getAffichePageMain"],
                          "traitements.php" =>          ["controller" => "TraitementsController",    "method" => "getAffichePageTraitements"],
                          "index" =>                    ["controller" => "IndexController",    "method" => "getAffichePageIndex"],
                        ];
    
    
        public function __construct($requette)
        {
            $this->requette = $requette;   
        }
    
    
        public function runderController()
        {
            $requette = $this->requette;
            
            if(key_exists($requette, $this->route))
            {
                $controller = $this->route[$requette]["controller"]; //on recupere la requette + le controller
                $method = $this->route[$requette]["method"]; // de meme on recupere la requette + la method adequoite
        
                $controllerDemander = new $controller();
                $controllerDemander->$method();
            }
            else{
                echo "ERREUR 404 PAGE NON TROUVER SUR NOTRE SITE";
            }
        }
    }

?>