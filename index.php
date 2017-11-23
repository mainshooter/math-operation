<?php

  require_once 'Addup.class.php';
  require_once 'Subtract.class.php';

  $AddUp = new addUp([1,1,1]);
  $Subtract = new Subtract(2,1);

  echo $AddUp->calculate();
  echo "<br>";
  echo $Subtract->calculate();


?>
