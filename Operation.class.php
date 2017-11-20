<?php
  require_once 'Math.class.php';

  class Operation extends Math {
    private $operationResult;

    public function __construct() {
      $this->operationResult = null;
    }

    public function subTract() {
      $this->operationResult = $this->getFirstValue() - $this->getSecondValue();
      return($this->operationResult);
    }

    public function add() {
      $this->operationResult = $this->getFirstValue() + $this->getSecondValue();
    }
  }


?>
