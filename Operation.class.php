<?php
  require_once 'Math.class.php';

  class Operation extends Math {
    private $operationResult;

    public function __construct($firstValue, $secondValue) {
      $this->operationResult = null;

      $this->setFirstValue($firstValue);
      $this->setSecondValue($secondValue);
    }

    public function subTract() {
      $this->operationResult = $this->getFirstValue() - $this->getSecondValue();
      return($this->operationResult);
    }

    public function addUp() {
      $this->operationResult = $this->getFirstValue() + $this->getSecondValue();
      return($this->operationResult);
    }
  }


?>
