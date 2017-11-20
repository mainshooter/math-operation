<?php

  abstract class Math {
    private $firstValue;
    private $secondValue;
    private $arrayValues;
    private $operationResult;


    public function __construct($firstValue, $secondValue = false) {
      $this->operationResult = 0;
      $this->firstValue = null;
      $this->secondValue = null;

      $this->arrayValues = false;

      if (is_array($firstValue)) {
        $this->setMultipleValues($firstValue);
        $this->setFirstValue(false);
      }

      else {
        $this->setFirstValue($firstValue);
        $this->setSecondValue($secondValue);
      }
    }

    protected function checkIfWeHaveMoreThanTwoValues() {
      if ($this->arrayValues == false) {
        // We don't have 2 values
        return(false);
      }

      else if (is_array($this->arrayValues)){
        return(true);
      }
    }

    public function getOperationResult() {
      return($this->operationResult);
    }

    protected function setOperationResult($result) {
      $this->operationResult = $result;
    }

    /**
     * Sets the first value of the math we will do
     */
    private function setFirstValue($value) {
      $this->firstValue = $value;
    }

    protected function setMultipleValues($valueArrays) {
      $this->arrayValues = $valueArrays;
    }

    public function getMultipleValues() {
      return($this->arrayValues);
    }

    /**
     * Returns the first setted value
     * @return [float] [The first value of the math]
     */
    public function getFirstValue() {
      return($this->firstValue);
    }

    /**
     * Sets the second vlaue of our math
     */
    private function setSecondValue($value) {
      $this->secondValue = $value;
    }

    /**
     * Returns the second value that we had set
     * @return [float] [The second value of our math]
     */
    public function getSecondValue() {
      return($this->secondValue);
    }
  }


?>
