<?php
    include("connexionBd.php");
    class FormulaireModel
    {
        private $connexion;
    /*=========================================== 
                        CONSTRUCTEUR
    ============================================*/
        public function __construct($connexionBd){
            $this->connexion = $connexionBd;
        }

    /*=========================================== 
                        GETTERS
    ============================================*/
            public function getOneEnregistrement($id)
            {
                $req = $this->connexion->prepare(" SELECT * FROM main WHERE id=:id ");
                $req->bindParam(":id", $id, PDO::PARAM_INT);
                $req->execute();
                $donnees = $req->fetchAll(PDO::FETCH_OBJ);

                return $donnees;
            }

    /*=========================================== 
                        SETTERS 
    ============================================*/

    public function setInsererFormulaire($prenom,$nom,$date_de_naissance,$lieu_de_naissance,$matricule,$filiere,$date_de_soutenance,$moyenne,$date_du_jour)
    {
        $req = $this->connexion->prepare("INSERT INTO main(prenom,nom,date_de_naissance,lieu_de_naissance,matricule,filiere,date_de_soutenance,moyenne,date_du_jour) VALUE(:newPrenom,:newNom,:newDate_de_naissance,:newLieu_de_naissance,:newMatricule,:newFiliere,:newDate_de_soutenance,:newMoyenne,CURDATE() )");
        $req->bindParam(":newPrenom", $prenom, PDO::PARAM_STR);
        $req->bindParam(":newNom", $nom, PDO::PARAM_STR);
        $req->bindParam(":newDate_de_naissance", $date_de_naissance, PDO::PARAM_STR);
        $req->bindParam(":newLieu_de_naissance", $lieu_de_naissance, PDO::PARAM_STR);
        $req->bindParam(":newMatricule", $matricule, PDO::PARAM_STR);
        $req->bindParam(":newFiliere", $filiere, PDO::PARAM_STR);
        $req->bindParam(":newDate_de_soutenance", $date_de_soutenance, PDO::PARAM_STR);
        $req->bindParam(":newMoyenne", $moyenne, PDO::PARAM_STR);

        $req->execute();

        return $this->connexion->lastInsertId();
    }

    
    public function setUpdateEnregistrement($id,$prenom,$nom,$date_de_naissance,$lieu_de_naissance,$matricule,$filiere,$date_de_soutenance,$moyenne,$date_du_jour)
    {
        $req = $this->connexion->prepare("UPDATE main SET nom =:nom, prenom =:prenom, date_de_naissance =:date_de_naissance, lieu_de_naissance =:lieu_de_naissance, matricule=:matricule, filiere = :filiere, date_de_soutenance=:date_de_soutenance, moyenne=:moyenne, date_du_jour=CURDATE() WHERE id = :id ");
        $req->bindParam(":nom", $nom, PDO::PARAM_STR);
        $req->bindParam(":prenom", $prenom, PDO::PARAM_STR);
        $req->bindParam(":date_de_naissance", $date_de_naissance, PDO::PARAM_STR);
        $req->bindParam(":lieu_de_naissance", $lieu_de_naissance, PDO::PARAM_STR);
        $req->bindParam(":matricule", $matricule, PDO::PARAM_STR);
        $req->bindParam(":filiere", $filiere, PDO::PARAM_STR);
        $req->bindParam(":date_de_soutenance", $date_de_soutenance, PDO::PARAM_STR);
        $req->bindParam(":moyenne", $moyenne, PDO::PARAM_STR);
        $req->bindParam(":id", $id, PDO::PARAM_INT);
        $req->execute();

        return true;
    }


        //Methode pour sucuriser les donnees recuperer par les formulaire ou les donnees inserer sur l'url en les filtrant 
        public function filtrerDonnees($donnee)
        {
            $donnee = trim($donnee); //cette fonction permet de supprimer les espaces initules inserer dans le texte
            $donnee = strip_tags($donnee); // cette fonction permet de rendre inactive l'insertion des balises ou scripts 
            $donnee = stripslashes($donnee); //celle ci parmet d'annuler la proprieter d'echappement de l'anti-slash
            $donnee = htmlspecialchars($donnee); // pour conclure une fonction pour le filtrage
            return $donnee;
        }




    }

