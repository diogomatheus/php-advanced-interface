<?php
class TelevisionImpl implements Electronic
{
    private $_status;

    public function  turnOn() {
        echo 'Turning on the Television';
        $this->_status = true;
    }
    
    public function  turnOff() {
        echo 'Turning off the Television';
        $this->_status = false;
    }

    public function isOn() {
        return $this->_status;
    }
}

