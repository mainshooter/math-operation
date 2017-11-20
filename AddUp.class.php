<?php
  require_once 'Math.class.php';
  class addUp extends Math {

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
        $this->setOperationResult($this->getFirstValue() + $this->getSecondValue());
        return($this->getOperationResult());
      }

      else {
        // We want to do it with multiple values
        for ($i=0; $i < count($this->getMultipleValues()); $i++) {
          $this->setOperationResult($this->getOperationResult() + $this->getMultipleValues()[$i]);
        }
      }
      return($this->getOperationResult());
    }
  }


?>
