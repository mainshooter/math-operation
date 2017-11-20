<?php
  require_once 'Math.class.php';

  class Subtract extends Math {


    /**
     * Ads up the first and the second value and returns if
     * @return [float] [The result from the math]
     */
    public function calculate() {
      if ($this->checkIfWeHaveMoreThanTwoValues() == false) {
        $this->setOperationResult($this->getFirstValue() - $this->getSecondValue());
        return($this->getOperationResult());
      }

      else if ($this->checkIfWeHaveMoreThanTwoValues() == true){
        // We want to do it with multiple values
        $this->setOperationResult($this->getOperationResult()[0]);
        // To prefent that we will do somethong wrong with the first value

        for ($i=1; $i < count($this->getMultipleValues()); $i++) {
          $this->setOperationResult($this->getOperationResult() - $this->getMultipleValues()[$i]);
        }
      }
      return($this->getOperationResult());
    }
  }


?>
