<?php
include __DIR__. '/init.php';
include __DIR__. '/header.php';



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $prezzo = $_POST['prezzo'];
    $img = $_POST['img'];

    $stmt = $pdo->prepare("INSERT  INTO articoli(nome,prezzo,img) VALUES  (:nome, :prezzo,:img)");
    $stmt->execute(['nome'=>$nome,'prezzo'=> $prezzo, 'img'=>$img]);
    header('Location: admin.php');

}






?>

<h3> inserisci prodotto</h3>
<form method="post" action="">
  <div class="mb-3">
    <label for="nome" class="form-label">nome</label>
    <input type="text" class="form-control" id="nome" name="nome" placeholder="Enter nome" required>

  </div>
  <div class="mb-3">
    <label for="prezzo" class="form-label">prezzo</label>
    <input type="number" class="form-control" id="prezzo" name="prezzo" placeholder="Enter prezzo" required>

  </div>
  <div class="mb-3">
    <label for="img" class="form-label">img</label>
    <input type="text" class="form-control" id="img" name="img" placeholder="Enter img" required>

  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>





