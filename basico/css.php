<div class="titulo">Integração CSS em PHP</div>

<h1 azul center>
  <?php
    echo 'Olá';
    echo '<small> Mundo </small>';
  ?>
</h1>

<?= "<div center>Outra froma de me expressar!</div>" ?>

<br>
<div center>
  <button dobro>
    <?= "Legal"?>
  </button>
</div>

<style>
  button {
    width: <?= 60 + 60 ?>px;
    padding: 6px 12px;
    background-color: tomato;
    border-radius: 5px;
    border: none;
    color: #fff;
    font-weight: bold;
    cursor: pointer;
  }

  [center] {
    text-align: center;
  }

  [azul] {
    color: #4286f4;
  }

  [dobro] {
    font-size: 2rem;
  }

</style>