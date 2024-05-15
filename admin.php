<?php
include __DIR__ . '/header.php';
include __DIR__ . '/classi/prodotti.php';
include __DIR__ . '/getCard.php';

if ($_SESSION['utente']) {

?>
    <h1 class="mt-5">Sezione amministratore</h1>

<div class="row gy-2">
<?php

$prodotti=[];


foreach ($articoli as $e){

    $prodotti[] = new Prodotti($e['id'], $e['nome'], $e['prezzo'], $e['img']);
}
foreach ($prodotti as $e){
    $e->render();
}

?>
</div>

<?php } else {
    echo "Non sei loggato! Fai il log in per visualizzare la pagina!";
}
?>