<?php
class BlurayPlayerImpl implements Electronic
{
    private $_status;

    public function  turnOn() {
        echo 'Turning on the Bluray Player';
        $this->_status = true;
    }
    
    public function  turnOff() {
        echo 'Turning off the Bluray Player';
        $this->_status = false;
    }

    public function isOn() {
        return $this->_status;
    }
}

