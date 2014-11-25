<?php

class TimeField extends InputField {

    public function __construct() {
        $this->icon   = 'clock-o';
        $this->format = 24;
    }

    public function format() {
        return ($this->format === 12)
            ? 'h:i A'
            : 'H:i';
    }

    public function value() {
        if (empty($this->value) || $this->value === 'now')
        {
            return date($this->format(), strtotime('now'));   
        }

        return $this->value;
        
    }

    public function input() {

        $input = parent::input();

        $input->attr('maxlength', 5);

        return $input;
    }

    public function validate() {
        return (bool) preg_match('/^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/', $this->value());
    }
}