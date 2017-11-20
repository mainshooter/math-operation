<?php

  abstract class Math {
    private $firstValue;
    private $secondValue;

    public function __construct() {
      $this->firstValue = null;
      $this->secondValue = null;
    }

    protected function setFirstValue($value) {
      $this->firstValue = $value;
    }

    public function getFirstValue() {
      return($this->firstValue);
    }

    protected function setSecondValue($value) {
      $this->secondValue = $value;
    }

    public function getSecondValue() {
      return($this->secondValue);
    }
  }


?>
