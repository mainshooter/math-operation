<?php

  abstract class Math {
    private $firstValue;
    private $secondValue;

    public function __construct() {
      $this->firstValue = null;
      $this->secondValue = null;
    }

    public function setFirstValue($value) {
      $this->firstValue = $value;
    }

    public function getFirstValue() {
      return($this->firstValue);
    }

    public function setSecondValue($value) {
      $this->secondValue = $value;
    }

    public function getSecondValue() {
      return($this->secondValue);
    }
  }


?>
