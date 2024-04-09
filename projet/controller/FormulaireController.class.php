<?php

    class FormulaireController
    {

        public function getAffichePageFormulaire()
        {   
            require_once(MODEL_ROOT."FormulaireModel.class.php");
            $objetformulaire = new FormulaireModel($connexionBd);


/*====================================================================================================================*/
            if(isset($_POST["envoyer"]))
            {
                $prenom = $_POST["prenom"];
                $nom = $_POST["nom"];
                $date_de_naissance = $_POST["date_de_naissance"];
                $lieu_de_naissance = $_POST["lieu_de_naissance"];
                $matricule = $_POST["matricule"];
                $filiere = $_POST["filiere"];
                $date_de_soutenance = $_POST["date_de_soutenance"];
                $moyenne = $_POST["moyenne"];
                $date_du_jour = date("Y-m-d");
                
                $idLigneInserer = $objetformulaire->setInsererFormulaire($prenom,$nom,$date_de_naissance,$lieu_de_naissance,$matricule,$filiere,$date_de_soutenance,$moyenne,$date_du_jour);
                    if(!empty($idLigneInserer))
                    {
                        ?><script>alert("INSERER AVEC SUCCES");</script><?php
                            header("Location: ".HOST."acceuil.php?id=$idLigneInserer");
                            exit;
                    }
            }

            /*====================================================================================================================*/

            if(isset($_GET))
            {
                $objetformulaire = new formulaireModel($connexionBd);
                    
                if( isset($_GET["idEditer"]) && isset(($_GET["action"])) && $_GET["action"]==="edit" )
                {
                    $id_int = (int)$_GET["idEditer"];
                    $user = $objetformulaire->getOneEnregistrement($id_int);
                    foreach($user AS $data)
                    {
                        $prenom = $data->prenom;
                        $nom = $data->nom;
                        $date_de_naissance = $data->date_de_naissance;
                        $lieu_de_naissance = $data->lieu_de_naissance;
                        $matricule = $data->matricule;
                        $filiere = $data->filiere;
                        $date_de_soutenance = $data->date_de_soutenance;
                        $moyenne = $data->moyenne;
                        $date_du_jour = date("Y-m-d");
                    }
                
                    
                    if(isset($_POST["upenvoyer"]))
                    {
                        $prenom = $_POST["upprenom"];
                        $nom = $_POST["upnom"];
                        $date_de_naissance = $_POST["update_de_naissance"];
                        $lieu_de_naissance = $_POST["uplieu_de_naissance"];
                        $matricule = $_POST["upmatricule"];
                        $filiere = $_POST["upfiliere"];
                        $date_de_soutenance = $_POST["update_de_soutenance"];
                        $moyenne = $_POST["upmoyenne"];
                        $date_du_jour = date("Y-m-d");
                    
                       $testInsertUser = $objetformulaire->setUpdateEnregistrement($id_int,$prenom,$nom,$date_de_naissance,$lieu_de_naissance,$matricule,$filiere,$date_de_soutenance,$moyenne,$date_du_jour);
                    
                       if($testInsertUser === true)
                       {
                           ?><script>alert("DONNEES MISES A JOUR AVEC SUCCES");</script><?php
                           header("Location: ".HOST."index.php");
                           exit;
                       }
                    }   
                }
            }

            /*====================================================================================================================*/
 
            include_once(VIEW_ROOT."formulaire.php");
        }

    }
?>