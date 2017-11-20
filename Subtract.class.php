<?php
  require_once 'Math.class.php';

  class Subtract extends Math {

    /**
     * Runs on defining the class and sets the first and second value
     * @param [float] $firstValue  [The first value]
     * @param [float] $secondValue [The second value]
     */
    public function __construct($firstValue, $secondValue) {
      $this->operationResult = null;

      $this->setFirstValue($firstValue);
      $this->setSecondValue($secondValue);
    }

    /**
     * Substract the first from the second setted value
     * @return [float] [The result of the math]
     */
    public function calculate() {
      $this->setOperationResult($this->getFirstValue() - $this->getSecondValue());
      return($this->getOperationResult());
    }
  }


?>
