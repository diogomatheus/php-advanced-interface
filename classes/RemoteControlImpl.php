<?php
class RemoteControlImpl implements RemoteControl
{
    public function togglePower(Electronic $electronic) {
        if(!$electronic->isOn()) {
            $electronic->turnOn();
        } else {
            $electronic->turnOff();
        }
    }
}

