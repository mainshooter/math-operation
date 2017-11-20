<?php

  abstract class Math {
    private $arrayValues;
    private $operationResult;


    public function __construct($firstValue, $secondValue = false) {
      $this->operationResult = 0;

      $this->arrayValues = false;

      if (is_array($firstValue)) {
        $this->setMultipleValues($firstValue);
      }

      else {
        $this->setFirstValue($firstValue);
        $this->setSecondValue($secondValue);
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
      $this->arrayValues[0] = $value;
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
      return($this->arrayValues[0]);
    }

    /**
     * Sets the second vlaue of our math
     */
    private function setSecondValue($value) {
      $this->arrayValues[1] = $value;
    }

    /**
     * Returns the second value that we had set
     * @return [float] [The second value of our math]
     */
    public function getSecondValue() {
      return($this->arrayValues[1]);
    }
  }


?>
