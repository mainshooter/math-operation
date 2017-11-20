<?php

  require_once 'Addup.class.php';
  require_once 'Subtract.class.php';

  $AddUp = new addUp(1, 3);
  $Subtract = new Subtract(1, 3);

  echo $AddUp->addUp();
  echo "<br>";
  echo $Subtract->subTract();


?>
