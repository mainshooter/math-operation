<?php
  require_once 'Math.class.php';
  class addUp extends Math {

    /**
     * Ads up the first and the second value and returns if
     * @return [float] [The result from the math]
     */
    public function calculate() {
        // We want to do it with multiple values
        for ($i=0; $i < count($this->getMultipleValues()); $i++) {
          $this->setOperationResult($this->getOperationResult() + $this->getMultipleValues()[$i]);
        }
      return($this->getOperationResult());
    }
  }


?>
