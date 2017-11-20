<?php
  require_once 'Math.class.php';

  class Subtract extends Math {

    /**
     * Runs on defining the class and sets the first and second value
     * @param [float] $firstValue  [The first value]
     * @param [float] $secondValue [The second value]
     */
    public function __construct($firstValue, $secondValue = false) {
      if (is_array($firstValue)) {
        $this->setMultipleValues($firstValue);
        $this->setFirstValue(false);
      }

      else {
        $this->setFirstValue($firstValue);
        $this->setSecondValue($secondValue);
      }
    }

    /**
     * Ads up the first and the second value and returns if
     * @return [float] [The result from the math]
     */
    public function calculate() {
      if ($this->getMultipleValues() == false) {
        $this->setOperationResult($this->getFirstValue() - $this->getSecondValue());
        return($this->getOperationResult());
      }

      else {
        // We want to do it with multiple values
        $this->setOperationResult($this->getOperationResult()[0]);
        for ($i=1; $i < count($this->getMultipleValues()); $i++) {
          $this->setOperationResult($this->getOperationResult() - $this->getMultipleValues()[$i]);
        }
      }
      return($this->getOperationResult());
    }
  }


?>
