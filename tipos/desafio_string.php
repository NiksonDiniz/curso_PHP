<div class="titulo">Desafio String</div>

<?php
  /* 
    Avaliando os métodos da documentação da string, qual o método 
    que a posição do texto 'abc' na string '!AbcaBcabc' retorne 1?
  */

  echo strpos('!AbcaBcabc', 'abc'); # 7 -  busca por case sensitive
  echo stripos('!AbcaBcabc', 'abc'); # 1 - buscar sem case sensitive
  echo strpos(strtolower('!AbcaBcabc'), 'abc'); # 1