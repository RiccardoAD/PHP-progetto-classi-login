<?php
class Prodotti {
    public $id;
    public $nome;
    public $prezzo;
    public $img;



    public function __construct($id, $nome, $prezzo, $img) {
        $this->id= $id;
        $this->nome=$nome;
        $this->prezzo=$prezzo;
        $this->img=$img;
    }


    function render (){
        echo '<div class="col-3">';
        echo '<div class="card" style="width: 100% ;">';
        echo '<img src="'.$this->img.'" class="card-img-top  object-fit-cover" style="height:15rem;width:100%" alt="img">';
        echo '<div class="card-body">';
        echo '<h5>'.'Casa: '.$this->nome.'</h5>';
        echo '<p>Prezzo : €'.$this->prezzo.'</span></p>';
        echo '<a href="delete.php?id='.$this->id.'" class="btn btn-danger">Elimina</a>';

        echo '<a href="modifica.php?id='.$this->id.'" class="btn btn-warning ms-2">Modifica</a>';
        echo '</div></div></div>';
    }
}