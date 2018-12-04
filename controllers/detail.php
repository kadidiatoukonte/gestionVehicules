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

if (!empty($_POST['name']) AND !empty($_POST['type']) AND !empty($_POST['color']) AND !empty($_POST['mark']) AND !empty($_POST['doors']))
{
  $name = htmlspecialchars($_POST['name']);
  $type = htmlspecialchars($_POST['type']);
  $color = htmlspecialchars($_POST['color']);
  $mark = htmlspecialchars($_POST['mark']);
  $doors = htmlspecialchars($_POST['doors']);
  $reponse = $bdd->prepare("INSERT INTO tasks (name, type, color, mark, doors) VALUES (:name, :type, :color, :mark, :doors)");
  $reponse->execute(array(
      "name" => $name,
      "type" => $type,
      "color" => $color,
      "mark" => $mark,
      "doors" => $doors
  ));
  header('Location: detail.php?detail=' . $_GET["vehicules"] . '');
}

// if(isset($_POST['send']))
// { // si formulaire soumis
//     $name = $_POST['name'];
//     $type = $_POST['type'];
//     $color = $_POST['color'];
//     $mark = $_POST['mark'];
//     $doors = $_POST['doors'];   

//     echo $name . '<br/>';

//     echo $type . '<br/>';
    
//     echo $color . '<br/>';
   
//     echo $mark . '<br/>';
    
//     echo $doors . '<br/>';
// }

include "../views/detailVue.php";
?>

 