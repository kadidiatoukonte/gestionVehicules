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

if(isset($_POST['send']))
{ // si formulaire soumis
    $name = $_POST['name'];
    $color = $_POST['color'];
    $mark = $_POST['mark'];
    $doors = $_POST['doors'];   
    echo $name;
    echo nl2br;
    echo $color;
    echo nl2br;
    echo $mark;
    echo nl2br;
    echo $doors;
}
include "../views/detailVue.php";

?>