<?php
  include("template/header.php");
?>
  <?php
  
  ?>
    <div class="row col-12 p-0 m-0">
  <?php
  foreach ($vehicles as $key => $value) {?>
      <div class="listCard mt-3 border border-dark col-12 col-md-5 mx-auto">
        <a href="detail.php?index=<?php echo $value->getId(); ?>">
          <div class="col-12 p-0 m-0">
            <p class="cardTitle text-center pt-2 blackText">Name: <?php echo $value->getName(); ?></p>
            <p class="cardPrice text-center pb-2 mb-0 mt-2 blackText">Type: <?php echo $value->getType();?></p>
            <p class="cardPrice text-center pb-2 mb-0 mt-2 blackText">Color: <?php echo $value->getColor();?></p>
            <p class="cardPrice text-center pb-2 mb-0 mt-2 blackText">Mark: <?php echo $value->getMark();?></p>
          </div>
          <form  class="mb-2 text-center" action="detail.php?index=<?php echo $value->getId(); ?>" method="post">
            <input type="submit" name="modifier" value="Modifier">
          </form>  
        </a>
        <form  class="mb-2 text-center" action="delete.php?index=<?php echo $value->getId(); ?>" method="post">    
          <input type="submit" name="delete" value="Delete">
        </form>
      </div>
      
      
      
<?php } 


   include("template/footer.php")
  ?>
