<?php
    include("connexionBd.php");
    class MainModel
    {
        private $connexion;

        public function __construct($connexionBd){
            $this->connexion = $connexionBd;
        }


        public function getOneEnregistrements($id)
        {
            $req = $this->connexion->prepare(" SELECT * FROM main WHERE id=:id ");
            $req->bindParam(":id", $id, PDO::PARAM_INT);
            $req->execute();
            $donnees = $req->fetchAll(PDO::FETCH_OBJ);

            return $donnees;
        }

        // Convertir la date en français
        function convertirDateEnFrancais($dateOriginale) {
            // Les mois en français
            $moisEnFrancais = array(
                'January' => 'Janvier',
                'February' => 'Février',
                'March' => 'Mars',
                'April' => 'Avril',
                'May' => 'Mai',
                'June' => 'Juin',
                'July' => 'Juillet',
                'August' => 'Août',
                'September' => 'Septembre',
                'October' => 'Octobre',
                'November' => 'Novembre',
                'December' => 'Décembre'
            );
        
            // Création d'un objet DateTime à partir de la date originale
            $dateObj = new DateTime($dateOriginale);
        
            // Formater la date dans le format "j F Y" (jour en chiffres, nom du mois en entier, année)
            $moisEnAnglais = $dateObj->format('F');
            if (array_key_exists($moisEnAnglais, $moisEnFrancais)) {
                $moisEnFrancais = $moisEnFrancais[$moisEnAnglais]; // Récupérer le mois en français depuis le tableau
            } else {
                $moisEnFrancais = $moisEnAnglais; // Utiliser le mois en anglais s'il n'existe pas dans le tableau
            }
        
            $dateFormatee = $dateObj->format('d') . ' ' . $moisEnFrancais . ' ' . $dateObj->format('Y');
            return $dateFormatee;
        }

    }

