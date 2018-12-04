<?php
  include("template/header.php");
?>

<a href="index.php"><i class="fas fa-angle-double-left">Retour</i></a>

<?php
  foreach ($dataVehicle as $value) 
  {
    ?>
    <div class="col-12 p-0 m-0">
      <p class="text-center pt-2 blackText">Name: <?php echo $value->getName(); ?></p>
      <p class="text-center pb-2 mb-0 mt-2 blackText">Type: <?php echo $value->getType();?></p>
      <p class="text-center pb-2 mb-0 mt-2 blackText">Color: <?php echo $value->getColor();?></p>
      <p class="text-center pb-2 mb-0 mt-2 blackText">Mark: <?php echo $value->getMark();?></p>
    </div>
  <?php
  } 
  ?>

  <form action="index.php" method="post" class="text-center">
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" name="name" id="exampleFormControlInput1" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Type</label>
    <select class="" name="type" id="exampleFormControlSelect1">
      <option>Truck</option>
      <option>Car</option>
      <option>Motorbike</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput2">Color</label>
    <input type="text" name="color" id="exampleFormControlInput2" placeholder="Color">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput3">Mark</label>
    <input type="text" name="mark" id="exampleFormControlInput3" placeholder="Mark">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput4">Doors</label>
    <input type="text" name="doors" id="exampleFormControlInput4" placeholder="Doors">
  </div>

  <input type="submit" name="send" value="Send">
  <input type="submit" name="delete" value="Delete">
</form>

<?php
 include("template/footer.php");

?>