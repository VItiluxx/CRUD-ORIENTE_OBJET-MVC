<?php

    class IndexController
    {
        public function getAffichePageIndex()
        {   
            require_once(MODEL_ROOT."IndexModel.class.php");
            $objet = new IndexModel($connexionBd);

            $users = $objet->getAllEnregistrements();
            // var_dump($donnees);
            // echo $donnees;
            // die();

            
            include_once(VIEW_ROOT."index.php");
        }
    }

?>
              