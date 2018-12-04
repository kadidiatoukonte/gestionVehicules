<?php

function chargerClasse($classname)
{
    if(file_exists('../model/'. $classname.'.php'))
    {
        require '../model/'. $classname.'.php';
    }
    else 
    {
        require '../entities/' . $classname . '.php';
    }
}

spl_autoload_register('chargerClasse');

$db = new VehicleManager(Database::DB());

$newVehicle = new Car([
    "name" => "name"
]);

$db->addVehicle($newVehicle);

$vehicles = $db->getVehicles();



include "../views/indexVue.php";
?>

 