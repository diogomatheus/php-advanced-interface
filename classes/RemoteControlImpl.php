<?php
class RemoteControlImpl implements RemoteControl
{
    public function tooglePower(Electronic $electronic) {
        if(!$electronic->isOn()) {
            $electronic->turnOn();
        } else {
            $electronic->turnOff();
        }
    }
}

