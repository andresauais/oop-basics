<?php

class Device {
  public $serialNumber;

  function getSerialNumber(){
    return $this->serialNumber;
  }

}

class Mobile extends Device{
  public $name;
  public $brand;

  function getName(){
    return $this->name;
  }

  function getBrand(){
    return $this->brand;
  }
}

class Tablet extends Device{
  public $name;
  public $brand;

  function getName(){
    return $this->name;
  }

  function getBrand(){
    return $this->brand;
  }
}

class DeviceManager {
  public $serialNumber;

  function getDeviceSerialNumber(Device $device){
    return $device->getSerialNumber();
  }
}

$modernMobile = new Mobile();
$modernMobile->serialNumber = 12345;
$modernMobile->name = "s20";
$modernMobile->brand = "Samsung";

echo $modernMobile->getSerialNumber();
echo "<br>";
echo $modernMobile->getName();
echo "<br>";
echo $modernMobile->getBrand();
echo "<br>";

$modernTablet = new DeviceManager();
$modernTablet->serialNumber = 12345;

print_r ($modernTablet->getDeviceSerialNumber($modernMobile));
echo "<br>";

