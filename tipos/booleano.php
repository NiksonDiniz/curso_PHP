<div class="titulo">Tipo Booleano</div>

<?php
  echo TRUE; # converte pra 1
  echo FALSE; # não mostra nada

  echo '<br>'. var_dump(true); # bool(true)
  echo '<br>'. var_dump(false); # bool(false)
  echo '<br>'. var_dump('false'); # string(5) "false"
  echo '<br>'. is_bool(false); # true - 1
  echo '<br>'. is_bool('false'); # false - retorna nada

  // fazer as regras de conversões

  # dos inteiros, 0 é o único que será convertido para falso
  echo '<br>' . var_dump((bool) 0); # bool(false)
  echo '<br>' . var_dump((bool) 20); # bool(true)
  echo '<br>' . var_dump((bool) -1); # bool(true)
  echo '<br>' . var_dump((bool) 0.0); # bool(false)
  echo '<br>' . var_dump((bool) 0.0001); # bool(true)
  echo '<br>' . var_dump((bool) ""); # bool(false)
  echo '<br>' . var_dump((bool) " "); # bool(true)
  echo '<br>' . var_dump((bool) "0"); # bool(false)
  echo '<br>' . var_dump((bool) "00"); # bool(true)