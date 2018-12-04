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

$_GET['index'];

$newVehicle = new Car([
    "name" => "name"    
]);

$db->addVehicle($newVehicle);

$dataVehicle = $db->getVehicle($info);

// $vehicles = $db->getVehicles();

if (!empty($_POST['name']) AND !empty($_POST['type']) AND !empty($_POST['color']) AND !empty($_POST['mark']))
{

 
  header('Location: detail.php?detail=' . $_GET["vehicules"] . '');
}

include "../views/detailVue.php"
?>

 