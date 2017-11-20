<?php

  require_once 'Operation.class.php';

  $MathOperation = new Operation();
  $MathOperation->setFirstValue(1);
  $MathOperation->setSecondValue(3);
  echo $MathOperation->add();
  echo "<br>";
  echo $MathOperation->subTract();


?>
