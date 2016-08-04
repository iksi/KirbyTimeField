<?php

class TimeField extends InputField {

  public $override = false;

  public function __construct() {
    $this->icon = 'clock-o';
    $this->format = 24;
  }

  public function detectFormat($value) {
    $patterns = [
      '/^(0?[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/',
      '/^(0?[0-9]|1[0-2]):[0-5][0-9] ?(AM|PM)$/i'
    ];

    foreach ($patterns as $pattern) {
      if (preg_match($pattern, $value)) return true;
    }

    return false;
  }

  public function format() {
    return ($this->format === 24)
      ? 'H:i'
      : 'h:i A';
  }

  public function value() {
    $value = $this->override()
      ? $this->default()
      : parent::value();

    if ($value === 'now') {
      return date($this->format($this->format), time());
    }

    if (empty($value) || $this->detectFormat($value) === false) {
      return $value;
    }

    return date($this->format($this->format), strtotime($value));
  }

  public function validate() {
    return $this->detectFormat($this->value);
  }

}
