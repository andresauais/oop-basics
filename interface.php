<?php
class Device {
  public $id;
  public $name;
  public $brand;

  public function __construct($id, $name, $brand){
    $this->id = $id;
    $this->name = $name;
    $this->brand = $brand;
  }

  public function getId(){
    return $this->id;
  }

  public function getName(){
    return $this->name;
  }
  public function getBrand(){
    return $this->brand;
  }
}

interface DeviceRepository{
  public function create(Device $device);
  public function findById($deviceId);
}

class MemoryRepository implements DeviceRepository{
  
  private $memory = array();

  public function getMemory(){
    return $this->memory;
  }
  public function create(Device $device){
    array_push($this->memory, $device);
  }
  public function findById($deviceId){
    foreach($this->memory as $device){
      if($device->getId() == $deviceId){
        return $device;
      }
    }
  }
}

class DeviceManager {
  function addDevice(DeviceRepository $repository, Device $device){
    $repository->create($device);
  }
}

$memoryRepository = new MemoryRepository();
$deviceManager = new DeviceManager();
$deviceManager->addDevice($memoryRepository, new Device(1,"s20", "Samsung"));
$deviceManager->addDevice($memoryRepository, new Device(2,"iPhone 11", "Apple"));
$deviceManager->addDevice($memoryRepository, new Device(3,"iPhone X", "Apple"));

echo "<pre>";
print_r($memoryRepository);
echo "<br>";
print_r($memoryRepository->findById(1));
echo "<br>";
print_r($memoryRepository->findById(2));
echo "<br>";
print_r($memoryRepository->findById(3));
echo "<br>";

