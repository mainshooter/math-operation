<?php
  require_once 'Math.class.php';

  class Subtract extends Math {
    private $operationResult;

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
    public function subTract() {
      $this->operationResult = $this->getFirstValue() - $this->getSecondValue();
      return($this->operationResult);
    }
  }


?>
