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





$takeid = $_GET['vehicles'];
$query = $this->getDb()->prepare('DELETE FROM vehicles WHERE id=$takeid');
$query->execute();
// $reponse = $db->prepare("DELETE FROM vehicles WHERE id=$takeid");
// $reponse->execute();
header('Location: index.php?index=' . $_GET["index"] . '');





include "../views/indexVue.php";
?>






