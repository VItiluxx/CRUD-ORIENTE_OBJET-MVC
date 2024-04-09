<?php
    include("connexionBd.php");

    class IndexModel
    {
        private $connexion;

        public function __construct($connexionBd){
            $this->connexion = $connexionBd;
        }


        public function getAllEnregistrements()
        {
            $req = $this->connexion->query("SELECT * FROM main");
            $donnees = $req->fetchAll(PDO::FETCH_OBJ);

            return $donnees;
        }

        // fonction de tri pour la barre de recherche sur la banniere du site initialiser sur la colone 'nom' de la table matiere de la bd
        public function executerRecherche($nomcomplet)
        {
            $req_affiche = $this->connexion->prepare('SELECT *
                                                        FROM main
                                                        WHERE prenom LIKE :prenom OR nom LIKE :nom
                                                        ORDER BY id DESC');
            $nomcomplet_param = '%'.$nomcomplet.'%';

            $req_affiche->bindParam(':nom', $nomcomplet_param, PDO::PARAM_STR);
            $req_affiche->bindParam(':prenom', $nomcomplet_param, PDO::PARAM_STR);
 
            $req_affiche->execute();

            $donnees = $req_affiche->fetchAll(PDO::FETCH_OBJ);
            return $donnees;
        }

    }