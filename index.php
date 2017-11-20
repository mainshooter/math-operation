<?php

  require_once 'Operation.class.php';

  $MathOperation = new Operation(1, 3);

  echo $MathOperation->add();
  echo "<br>";
  echo $MathOperation->subTract();


?>
