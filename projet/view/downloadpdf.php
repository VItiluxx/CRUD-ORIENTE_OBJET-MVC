<?php
    require_once VIEW_ROOT.'vendor/autoload.php'; // Inclure l'autoloader de Composer

    // Utiliser l'espace de noms DOMPDF
    use Dompdf\Dompdf;
    use Dompdf\Options;

    // Créer une instance de Dompdf
    $dompdf = new Dompdf();
    $test = '</h1>bonjour le mec du bendo</p>';
    // Configuration des options de DOMPDF
    $options = new Options();
    $options->set('defaultFont', 'Courier'); // Définir la police par défaut
    $dompdf->setOptions($options);

    ob_start();
    require(VIEW_ROOT . "main.php");
    $contenuPdfHtml = ob_get_clean();

    // Charger votre HTML dans DOMPDF
    $dompdf->loadHtml($test);

    // Définir le format et l'orientation de la page
    $dompdf->setPaper('A4', 'lnanscape');

    // Rendre le document PDF
    $dompdf->render();

    // Nom du fichier PDF à générer
    $nom_fichier = "ADR.pdf";

    // Générer le fichier PDF et le transmettre au navigateur en tant que téléchargement
    $dompdf->stream();


?>
