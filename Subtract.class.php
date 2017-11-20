<?php
  require_once 'Math.class.php';

  class Subtract extends Math {


    /**
     * Ads up the first and the second value and returns if
     * @return [float] [The result from the math]
     */
    public function calculate() {
        // We want to do it with multiple values
        $this->setOperationResult($this->getMultipleValues()[0] - $this->getMultipleValues()[1]);

        for ($i=2; $i < count($this->getMultipleValues()); $i++) {
          $this->setOperationResult($this->getOperationResult() - $this->getMultipleValues()[$i]);
        }
      return($this->getOperationResult());
    }
  }


?>
