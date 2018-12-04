<?php

class VehicleManager {
  private $_db;

  /**
   * Constructor
   *
   * @param PDO $db
   */
  public function __construct(PDO $db) {
    $this->setDb($db);
  }

  /**
   * Set the value of _db
   *
   * @param PDO $db
   * @return  self
   */ 
  public function setDb(PDO $db) {
    $this->_db = $db;
    return $this;
  }

  /**
   * Get the value of _db
   */ 
  public function getDb() {
    return $this->_db;
  }

  
  /**
   * Get all vehicles. It returns an array of objects $vehicle
   *
   * @return array $arrayVehicles
   */
  public function getVehicles() 
  {
    $arrayOfVehicles = [];
    $query = $this->getDb()->prepare('SELECT * FROM vehicles');
    $query->execute();
    $vehicles = $query->fetchAll(PDO::FETCH_ASSOC);

    // At each turn, a new vehicle object is instantiated and stored in $arrayOfUsers[]
    foreach ($vehicles as $vehicle) {

      if ($vehicle['type'] == 'car') {
          $arrayOfVehicles[] = new Car($vehicle);

      }elseif($vehicle['type'] == 'truck'){
          $arrayOfVehicles[] = new Truck($vehicle);
      }elseif($vehicle['type'] == 'motorbike'){
          $arrayOfVehicles[] = new Motorbike($vehicle);
      }

    }

    return $arrayOfVehicles;
  }
  
  public function getVehicle($info)
    {
      // if (is_int($info))
      //   {
            $query = $this->getDB()->prepare('SELECT * FROM vehicles WHERE id = :id');
            $query->bindValue('id', $info, PDO::PARAM_INT);
            $query->execute();
        // }

        // $dataCharacter est un tableau associatif contenant les informations d'un personnage
        $dataVehicle = $query->fetch(PDO::FETCH_ASSOC);

        // On crée un nouvel objet Character grâce au tableau associatif $dataCharacter, et on le retourne
        if ($dataVehicle['type'] == 'car') {
          $vehicle = new Car($dataVehicle);
          return $vehicle;

      }elseif($dataVehicle['type'] == 'truck'){
          $vehicle = new Truck($dataVehicle);
          return $vehicle;

      }elseif($dataVehicle['type'] == 'motorbike'){
          $vehicle = new Motorbike($dataVehicle);
          return $vehicle; 

      }
        // return new Vehicle($dataVehicle);
    }
  /**
   * Add vehicle in DB
   *
   * @param Vehicle $vehicle
   */
  public function addVehicle(Vehicle $vehicle)
  {
    $query = $this->getDb()->prepare('INSERT INTO vehicles(name) VALUES(:name)');

    $query->bindValue(':name', $vehicle->getName(), PDO::PARAM_STR);

    $query->execute();
  }

}


 ?>
