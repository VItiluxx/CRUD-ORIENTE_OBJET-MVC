<?php

    class TraitementsController
    {
        public function getAffichePageTraitements()
        {
            require_once(MODEL_ROOT."TraitementsModel.class.php");
            $objet = new TraitementsModel($connexionBd);

            if(isset($_GET))
            {   
                if(isset($_GET["idSup"]))
                {
                    $id_int = (int)$_GET["idSup"];
                    $objet->supprimeEnregistrement($id_int);
                    header("Location: ".HOST."index");
                }
                else{
                    echo "ID INTROUVABLE";
                }
            }
        }

    }