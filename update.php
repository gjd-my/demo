<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $blogSource = $_POST['blogSource'];

    // Percorso al file index.html
    $indexPath = 'index.html';

    // Contenuto del file index.html
    $indexContent = file_get_contents($indexPath);

    // Nuovo contenuto dell'iframe
    $newIframeContent = '<iframe id="blogFrame" src="' . htmlspecialchars($blogSource) . '" width="100%" height="600px"></iframe>';

    // Sostituisci l'iframe nel file index.html
    $newIndexContent = preg_replace('/<iframe id="blogFrame" src=".*?" width="100%" height="600px"><\/iframe>/', $newIframeContent, $indexContent);

    // Salva le modifiche nel file index.html
    file_put_contents($indexPath, $newIndexContent);

    echo 'CMS installato con successo!';
} else {
    echo 'Richiesta non valida.';
}
?>
