<?php
include __DIR__ . '/header.php';
include __DIR__ . '/classi/prodotti.php';
include __DIR__ . '/getCard.php';
include __DIR__.'/nav.php'
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

<?php
include __DIR__ . '/footer.php';

?>