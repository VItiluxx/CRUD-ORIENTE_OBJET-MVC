<?PHP //------------------debut: BANNIERE DE LA PAGE ---------------------------------------
require_once(VIEW_ROOT."banniereSuperieur.php");
//----------------fin: BANNIERE DE LA PAGE ----------------------------------------- ?>

<!----------------debut: CORPS DE LA PAGE -------------------------->
<main id="main-form">
<?php if(!isset($_GET["idEditer"])) { echo '
            
    <form method="post" class="row g-3" id="pageFormulaire">

      <div class="row">
        <div class="col">
          <label for="inputName1" class="form-label">Prenom</label>
          <input type="text" class="form-control" name="prenom" id="inputName1" placeholder="Premier nom" aria-label="Premier nom">
        </div>
        <div class="col">
          <label for="inputName" class="form-label">Nom</label>
          <input type="text" class="form-control" name="nom" id="inputName2" placeholder="Second nom" aria-label="Second nom">
        </div>
      </div>

      <div class="row">
        <div class="col">
          <label for="inputName3" class="form-label">Date de naissance</label>
          <input type="date" class="form-control" name="date_de_naissance" id="inputName3" placeholder="Date de naissance" aria-label="Date de naissance">
        </div>
        <div class="col">
          <label for="inputLieuNaissance" class="form-label">Lieu de naissance</label>
          <input type="text" class="form-control" name="lieu_de_naissance" id="inputLieuNaissance" placeholder="Lieu de naissance" aria-label="Lieu de naissance">
        </div>
      </div>
      
      <div class="col-md-4">
        <label for="inputFiliere" class="form-label">Filiere</label>
        <select name="filiere" id="inputFiliere" class="form-select">
          <option selected>Choisis...</option>
          <option>GESTION DES RESSOURCES HUMAINES</option>
          <option>DCJ</option>
          <option>GI</option>
          <option>MCD</option>
          <option>SID</option>
          <option>EDD</option>
          <option>CF</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="inputMatricule" class="form-label">Matricule</label>
        <input type="text" class="form-control" name="matricule" id="inputMatricule" placeholder="Votre matricule">
      </div>

      <div class="row">
        <div class="col">
          <label for="inputSoutenance" class="form-label">Date de soutenance</label>
          <input type="date" class="form-control" name="date_de_soutenance" id="inputSoutenance" placeholder="Date de soutenance" aria-label="Date de soutenance">
        </div>
      </div>

      <div class="row">
        <div class="col">
          <label for="inputMoyenne" class="form-label">Moyenne Generale</label>
          <input type="text" class="form-control" name="moyenne" id="inputMoyenne" placeholder="Inserez votre moyenne generale" aria-label="Inserez votre moyenne generale">
        </div>
      </div>

      <div class="col-12">
        <button type="submit" name="envoyer" class="btn btn-primary">Envoyer</button>
      </div>
      
    </form>
<?php ';} ?>

<?php if( isset($_GET["idEditer"]) && isset(($_GET["action"])) && $_GET["action"]==="edit" ) { echo '
    <div div-form_contenu>
    <form method="post" class="row g-3" id="pageFormulaire">

    <div class="row">
      <div class="col">
        <label for="inputName1" class="form-label">Prenom</label>
        <input type="text" class="form-control" name="upprenom" id="inputName1" value="'.$prenom.'" aria-label="Premier nom">
      </div>
      <div class="col">
        <label for="inputName" class="form-label">Nom</label>
        <input type="text" class="form-control" name="upnom" id="inputName2" value="'.$nom.'" aria-label="Second nom">
      </div>
    </div>

    <div class="row">
      <div class="col">
        <label for="inputName3" class="form-label">Date de naissance</label>
        <input type="date" class="form-control" name="update_de_naissance" id="inputName3" value="'.$date_de_naissance.'" aria-label="Date de naissance">
      </div>
      <div class="col">
        <label for="inputLieuNaissance" class="form-label">Lieu de naissance</label>
        <input type="text" class="form-control" name="uplieu_de_naissance" id="inputLieuNaissance" value="'.$lieu_de_naissance.'" aria-label="Lieu de naissance">
      </div>
    </div>
    
    <div class="col-md-4">
      <label for="inputFiliere" class="form-label">Filiere</label>
      <select name="upfiliere" id="inputFiliere" value="'.$filiere.'" class="form-select">
        <option selected>Choisis...</option>
        <option>GESTION DES RESSOURCES HUMAINES</option>
        <option>DCJ</option>
        <option>GI</option>
        <option>MCD</option>
        <option>SID</option>
        <option>EDD</option>
        <option>CF</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="inputMatricule" class="form-label">Matricule</label>
      <input type="text" class="form-control" name="upmatricule" id="inputMatricule" value="'.$matricule.'">
    </div>

    <div class="row">
      <div class="col">
        <label for="inputSoutenance" class="form-label">Date de soutenance</label>
        <input type="date" class="form-control" name="update_de_soutenance" id="inputSoutenance" value="'.$date_de_soutenance.'" aria-label="Date de soutenance">
      </div>
    </div>

    <div class="row">
      <div class="col">
        <label for="inputMoyenne" class="form-label">Moyenne Generale</label>
        <input type="text" class="form-control" name="upmoyenne" id="inputMoyenne" value="'.$moyenne.'" aria-label="Inserez votre moyenne generale">
      </div>
    </div>

    <div class="col-12">
      <button type="submit" name="upenvoyer" class="btn btn-primary">Mettre a jour</button>
    </div>
    
  </form>
  
<?php ';} ?>
</main>
<!----------------fin: CORPS DE LA PAGE -------------------------->

