<?php

abstract class Device {
  public $deviceId;
  public $serialNo;

  public function __construct($deviceId, $serialNo){
    $this->deviceId = $deviceId;
    $this->serialNo = $serialNo;
  }
  public function getId(){
    return $this->deviceId;
  }
  public function getSerialNo(){
    return $this->serialNo;
  }
  abstract function getDetail($deviceId);
}

class Mobile extends Device{
  function getDetail($deviceId){
    return "the device id is:" . $deviceId;
  }
}

$modernMobile = new Mobile("s20", 12345);

print_r($modernMobile);
echo "<br>";
echo $modernMobile->deviceId;
echo "<br>";
echo $modernMobile->getId();
echo "<br>";
echo $modernMobile->getDetail($modernMobile->getId());
echo "<br>";