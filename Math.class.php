<?php

  abstract class Math {
    private $firstValue;
    private $secondValue;
    private $operationResult;

    public function __construct() {
      $this->firstValue = null;
      $this->secondValue = null;
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
    protected function setFirstValue($value) {
      $this->firstValue = $value;
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
    protected function setSecondValue($value) {
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
