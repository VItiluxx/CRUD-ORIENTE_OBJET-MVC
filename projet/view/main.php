<div class="row">
    <div class="col-12 d-flex justify-content-end align-items-center">
        <button id="telecharger" class="btn btn-primary">Télécharger</button>
    </div>
</div>

<script>
    document.getElementById('telecharger').addEventListener('click', function() {
        const title = prompt("Veuillez entrer un titre pour votre document PDF :");
        if (title) {
            const content = document.querySelector('.pageAttestation');
            html2pdf().from(content).save(title.trim() + '.pdf');
        } else {
            alert("Veuillez entrer un titre pour votre document PDF.");
        }
    });
</script>

<main class="pageAttestation">
    <div class="bordOrange2">
        <div class="bord2">
            <div class="bordOrange1">
                <div class="bord1">
                    <!-- <div style="display: flex; flex-direction: column; align-items: center;">
                        <img src="<?=ASSET_HOST.'images/i1.jpg'?>" alt="cbs logo" style="max-width: 150px; height: auto;margin-bottom: 5px;">
                        <p>EXCELENCE – PROBITE – CREATIVITE <br>
                        B.P : 907 – TEL : 22 51 54 32 / 22 51 71 42    
                        </p>
                    </div>
                                                    <br>
                    <h1>ATTESTATION DE RÉUSSITE</h1>
                    
                    <p>Vu le Décret N° 208/PR/PM/MES/SGDGESRSFP/2011 du 15 février 2011, fixant les modalités de création et fonctionnement des Etablissements Privés de l'Enseignement Supérieur au Tchad;</p>
                    <p>Vu l'Amété d'Agrément N° 444/PR/PM/MESRS/SGDGESRS/DESP/2014 portant création d'un Etablissement Privé d'Enseignement Supérieur dénommé: CEFOD Business School, en abrégé (C.B.S.) à N'Djamena;</p>
                    <p>Vu la lettre de notification N° 0015/CMT/PMMESRSISEE/DGMDGT/22 du directeur général Technique de l'Enseignement Supérieur, de la recherche Scientifique et de l'innovation;</p>
                    <p>Vu le procès-verbal des délibérations du jury en date du <?=$date_de_soutenanceFormatee;?></p>
                    <p class="signature">Le Directeur Général de l'Institut universitaire du CEFOD,</p>
                    <p>Atteste que:</p>
                    
                    <div class="block3">
                        <p>M/Mme Mle: <?=$prenom." ".$nom;?></p>
                        <span>
                            <p>Née le : <?=$date_de_naissanceFormatee;?></p>
                            <p>A: <?=$lieu_de_naissance;?></p>
                        </span>
                        
                        <p>Régulièrement inscrit(e) dans son établissement sur compte de l'année académique 2022-2023</p>
                        <p>Matricule: <?=$matricule;?></p>
                    </div>
                    <p class="p-centrer">A obtenu la licence en</p>
                    
                    <h3 class="sig-course"><?=$filiere;?></h3>
                    
                    <span>
                        <p>Moyenne : <?=$moyenne;?></p>
                        <p>Mention: Passable</p>
                    </span>
                                                    <br>  
                    <p class="p-centrer">En foi de quoi le présent attestation lui est délivrée, pour servir et valoir ce que de droit.</p>
                    <br>
                    <p class="p-centrer">Fait à N'Djamena, le <?=$date_du_jourFormatee;?></p>
                     
                    <span><p>Le Directeur Général</p><p>Le Directeur des Études</p></span>
                                                <br><br><br>
                    
                    <hr class="ligneHorizontale">
                    <p class="p-centrer">Il ne peut être délivré qu'une seule attestation de réussite</p> -->
                </div> 
            </div>
        </div>
    </div>   
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>


