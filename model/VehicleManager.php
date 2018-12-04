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
   * Get all users. It returns an array of objects $user
   *
   * @return array $arrayVehicles
   */
  public function getVehicles() 
  {
    $arrayOfVehicles = [];
    $query = $this->getDb()->prepare('SELECT * FROM vehicles');
    // $query = $this->_db->query('SELECT * FROM vehicles');
    $query->execute();
    $vehicles = $query->fetchAll(PDO::FETCH_ASSOC);

    // A chaque tour, on instancie un nouvel objet User qu'on stocke dans $arrayOfUsers[]
    foreach ($vehicles as $vehicle) {
      
        $arrayOfVehicles[] = new Car($vehicle);
      
    }
    // On renvoie le tableau contenant tous nos objets User
    return $arrayOfVehicles;
  }

  /**
   * Add user in DB
   *
   * @param User $user
   */
  public function addVehicle(Vehicle $vehicle)
  {
    $query = $this->getDb()->prepare('INSERT INTO vehicles(name) VALUES(:name)');
    // $query->execute([
    //   'name' => $vehicle->getName()
    // ]);
    $query->bindValue(':name', $vehicle->getName(), PDO::PARAM_STR);

    $query->execute();
  }

}


 ?>
