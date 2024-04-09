<?php
    include("connexionBd.php");
    class TraitementsModel
    {
        private $connexion;

        public function __construct($connexionBd){
            $this->connexion = $connexionBd;
        }


        public function supprimeEnregistrement($id)
        {
            $req = $this->connexion->prepare("DELETE FROM main WHERE id =:id");
            $req->bindParam(":id", $id, PDO::PARAM_INT);
            $req->execute();
            return true;
        }
    }

?>