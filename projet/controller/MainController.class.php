<?php

    class MainController
    {   
        public function getAffichePageMain()
        {   
            require_once(MODEL_ROOT."MainModel.class.php");
            $objet = new MainModel($connexionBd);

            if(isset($_GET["id"]))
            {
                $id_int = (int)$_GET["id"];
                $donnees = $objet->getOneEnregistrements($id_int);
                foreach($donnees as $donnee):
                    $prenom = $donnee->prenom;
                    $nom = $donnee->nom;
                    $date_de_naissance = $donnee->date_de_naissance;
                    $lieu_de_naissance = $donnee->lieu_de_naissance;
                    $matricule = $donnee->matricule;
                    $filiere = $donnee->filiere;
                    $date_de_soutenance = $donnee->date_de_soutenance;
                    $moyenne = $donnee->moyenne;
                    $date_du_jour = $donnee->date_du_jour;
                endforeach;
              
                // $dateOriginale = $date_de_naissance; // Date récupérée de la base de données au format "Y-m-d"
                // $dateOriginale1 = $date_de_soutenance;
                // $dateOriginale2 = $date_du_jour;
                // // Création d'un objet DateTime à partir de la date originale
                // $dateObj = new DateTime($dateOriginale);
                // $dateObj1 = new DateTime($dateOriginale1);
                // $dateObj2 = new DateTime($dateOriginale2);
                // // Définir la locale à utiliser (français pour les noms des mois)
                // setlocale(LC_TIME, 'fr_FR.UTF-8');
                // // Formater la date dans le format "j F Y" (jour en chiffres, nom du mois en entier, année) en utilisant 
                // $date_de_naissanceFormatee = $dateObj->format('d F Y');
                // $date_de_soutenanceFormatee = $dateObj1->format('d F Y');
                // $date_du_jourFormatee = $dateObj2->format('d F Y');  
                
                
                // Tableau de correspondance des mois en français
                $moisEnFrancais = array(
                    'January' => 'janvier',
                    'February' => 'février',
                    'March' => 'mars',
                    'April' => 'avril',
                    'May' => 'mai',
                    'June' => 'juin',
                    'July' => 'juillet',
                    'August' => 'août',
                    'September' => 'septembre',
                    'October' => 'octobre',
                    'November' => 'novembre',
                    'December' => 'décembre'
                );

                // Date récupérée de la base de données au format "Y-m-d"
                $dateOriginale = $date_de_naissance; 
                $dateOriginale1 = $date_de_soutenance;
                $dateOriginale2 = $date_du_jour;

                // Création d'un objet DateTime à partir de la date originale
                $dateObj = new DateTime($dateOriginale);
                $dateObj1 = new DateTime($dateOriginale1);
                $dateObj2 = new DateTime($dateOriginale2);

                // Formater la date en utilisant le tableau de correspondance des mois
                $date_de_naissanceFormatee = $dateObj->format('d') . ' ' . $moisEnFrancais[$dateObj->format('F')] . ' ' . $dateObj->format('Y');
                $date_de_soutenanceFormatee = $dateObj1->format('d') . ' ' . $moisEnFrancais[$dateObj1->format('F')] . ' ' . $dateObj1->format('Y');
                $date_du_jourFormatee = $dateObj2->format('d') . ' ' . $moisEnFrancais[$dateObj2->format('F')] . ' ' . $dateObj2->format('Y');

            }

        /*===================================================================================================================================*/
            
            if(isset($_GET["idImprime"]))
            {
                $id_int = (int)$_GET["idImprime"];
                $donnees = $objet->getOneEnregistrements($id_int);

                foreach($donnees as $donnee):
                    $prenom = $donnee->prenom;
                    $nom = $donnee->nom;
                    $date_de_naissance = $donnee->date_de_naissance;
                    $lieu_de_naissance = $donnee->lieu_de_naissance;
                    $matricule = $donnee->matricule;
                    $filiere = $donnee->filiere;
                    $date_de_soutenance = $donnee->date_de_soutenance;
                    $moyenne = $donnee->moyenne;
                    $date_du_jour = $donnee->date_du_jour;
                endforeach;
              
                // Tableau de correspondance des mois en français
                $moisEnFrancais = array(
                    'January' => 'janvier',
                    'February' => 'février',
                    'March' => 'mars',
                    'April' => 'avril',
                    'May' => 'mai',
                    'June' => 'juin',
                    'July' => 'juillet',
                    'August' => 'août',
                    'September' => 'septembre',
                    'October' => 'octobre',
                    'November' => 'novembre',
                    'December' => 'décembre'
                );

                // Date récupérée de la base de données au format "Y-m-d"
                $dateOriginale = $date_de_naissance; 
                $dateOriginale1 = $date_de_soutenance;
                $dateOriginale2 = $date_du_jour;

                // Création d'un objet DateTime à partir de la date originale
                $dateObj = new DateTime($dateOriginale);
                $dateObj1 = new DateTime($dateOriginale1);
                $dateObj2 = new DateTime($dateOriginale2);

                // Formater la date en utilisant le tableau de correspondance des mois
                $date_de_naissanceFormatee = $dateObj->format('d') . ' ' . $moisEnFrancais[$dateObj->format('F')] . ' ' . $dateObj->format('Y');
                $date_de_soutenanceFormatee = $dateObj1->format('d') . ' ' . $moisEnFrancais[$dateObj1->format('F')] . ' ' . $dateObj1->format('Y');
                $date_du_jourFormatee = $dateObj2->format('d') . ' ' . $moisEnFrancais[$dateObj2->format('F')] . ' ' . $dateObj2->format('Y');
     
            }


            include_once(VIEW_ROOT."main.php");

        }

        public function getAffichePageDownloadpdf(){


            include_once(VIEW_ROOT."downloadpdF.php");
        }

    }
?>