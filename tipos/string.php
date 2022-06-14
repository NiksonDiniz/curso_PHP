<div class="titulo">Strings em PHP</div>

<?php
  echo 'Eu sou uma string';
  echo '<br>';
  var_dump("Eu também"); # string(10) "Eu também" - 10 por causa do acento
  echo '<br>';

  //  Concatenação
  echo 'Nós também' . " somos!" . '<br>';
  echo "'teste' com as aspas simples e duplas". "\"Teste\"" . "\\";
  print('<p>Também existe a função print</p>');

  //  Funções
  echo '<br>' . strtoupper('maximizado'); # MAXIMIZADO
  echo '<br>' . strtolower('MINIMIZADO'); # minimizado
  echo '<br>' . ucfirst('so a primeira letra'); # So a primeira letra
  echo '<br>' . ucwords('todas as palavras'); # Todas As Palavras
  echo '<br>' . strlen('quantas letras?'); # 15
  // echo '<br>' . mb_strlen('TAMBÉM', 'UTF-8'); # 6
  echo '<br>' . substr('Só uma parte mesmo', 7, 6); # do 7 ande 6 - parte
  echo '<br>' . substr('Só uma parte mesmo', 7); # a partir do 7 - parte mesmo
  echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso por isso'); # troca isso por aquilo
  



  