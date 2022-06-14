<div class="titulo">Conversões</div>

<?php
  echo is_int(PHP_INT_MAX); # retorna 1 - true

// int para float
echo '<br>';
var_dump(PHP_INT_MAX + 1); # float(9.223372036854776E+18)
echo '<br>';
var_dump(1 + 1.0); # float(2)
echo '<br>';
var_dump((float) 3); # float(3)
echo '<br>';

// float para int
var_dump((int) 2.8); # int(2) - perde informações
echo '<br>';
var_dump(intval(2.8, 10)); # int(2) - pega só a parte inteira
echo '<br>';
var_dump(round(2.8)); # arredonda float(3)
echo '<br>';

// operações com string
var_dump(3 + '22'); # 25
echo '<br>';
var_dump(3 . '22'); # 322
echo '<br>', is_string("3" . 2); # retorna 1 - ou seja true
echo '<br>', is_string("3" + 2); # não é
var_dump(3 + 'cinco'); # int(3) - ignora o "cinco"
var_dump(3 + '3 cinco'); # int(6) - pega a parte inicial