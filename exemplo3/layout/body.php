<body>
  <?php
  $variavel1 = 'teste';
  $variavel2 = "Frase {$variavel1}!";
  $variavel3 = array('Maçã', 'Banana', 'Pêra', 'Xuxu', 'Quiabo');
  $variavel4 = array('a'=> 'Maçã', 'b'=> 'Banana', 'c'=> 'Pêra', 'd'=> 'Xuxu', 'e'=> 'Quiabo');//aray associativo - semelhante hashmap do java
  $variavel5 = false;

  echo $variavel1;
  echo "<br>";
  echo $variavel2;
  echo "<br>";
  echo implode(',',$variavel3);
  echo "<br>";
  echo $variavel3[0];
  echo "<br>";
  echo $variavel4['b'];
  echo "<br>";
  echo $variavel5;
  echo "<br>";
  require 'printer.php'

 ?>
</body>
