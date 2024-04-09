<?PHP //------------------debut: BANNIERE DE LA PAGE ---------------------------------------
require_once(VIEW_ROOT."banniereSuperieur.php");
//----------------fin: BANNIERE DE LA PAGE ----------------------------------------- ?>

<!----------------debut: CORPS DE LA PAGE -------------------------->

    <div class="container">
<?php if( empty($_GET['rechercheNOM']) OR ( isset($_GET['bouttonRecherche']) AND empty($_GET['rechercheNOM']) ) ) { ?>

        <div class="table-responsive">
            <table id="laTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Naissance</th>
                        <th>Lieu de Naissance</th>
                        <th>Matricule</th>
                        <th>Filière</th>
                        <th>Date de Soutenance</th>
                        <th>Moyenne</th>
                        <th>Date d'enregistrement</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $user): ?>
                        <?php
                            $idUnique = $user->id;
                            echo "<tr>";
                            foreach($user as $donnee):
                                echo "<td>".$donnee."</td>";
                            endforeach;
                            echo "<td><a href='".HOST."acceuil?idImprime=$idUnique'>IMPRIMER</a><a href='".HOST."formulaire.php?idEditer=$idUnique&&action=edit'>EDITER</a><a href='".HOST."traitements.php?idSup=$idUnique'>SUPPRIMER</a></td>";
                            echo "</tr>";
                        ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php }    
else{
    $nomComplet = $_GET['rechercheNOM'];
      
    $users = $objet->executerRecherche($nomComplet);
    if(!empty($users)): 
        ?>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Naissance</th>
                        <th>Lieu de Naissance</th>
                        <th>Matricule</th>
                        <th>Filière</th>
                        <th>Date de Soutenance</th>
                        <th>Moyenne</th>
                        <th>Date d'enregistrement</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                
                    <?php foreach($users as $user): ?>
                        <?php
                            $idUnique = $user->id;
                            echo "<tr>";
                            foreach($user as $donnee):
                                echo "<td>".$donnee."</td>";
                            endforeach;
                            echo "<td><a href='".HOST."acceuil?idImprime=$idUnique'>IMPRIMER</a><a href='".HOST."formulaire.php?idEditer=$idUnique&&action=edit'>EDITER</a><a href='".HOST."traitements.php?idSup=$idUnique'>SUPPRIMER</a></td>";
                            echo "</tr>";
                        ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
    </div>
    
    <?php if(empty($users)){?> 
        <p style="color:red; font-size:20px; text-align:center;" >

                Aucune Nom ne correspond a votre recherche.
                                        
        </p><?php } ?>
<?php } ?>

<script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.0.0/datatables.min.js"></script>
<script>
    new DataTable('#laTable', {
    info: false,
    ordering: false,
    paging: true
});
</script> 