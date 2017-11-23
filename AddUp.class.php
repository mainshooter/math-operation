<?php
  require_once 'Math.class.php';
  class addUp extends Math {

    /**
     * Ads up the first and the second value and returns if
     * @return [float] [The result from the math]
     */
     protected function cal($number1, $number2) {
       return($number1 + $number2);
     }
  }


?>
