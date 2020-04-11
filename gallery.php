<!-- includes the header for the clinet side -->
<?php include "includes/header.php"; ?>

<?php include "includes/navigation.php"; ?>
<br>

<div id="carouselExampleIndicators" class="carousel slide col-12 mx-auto my-auto" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/beachVan.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/SurfboardsVan.jpg" class="img-responsive d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/BlueShirt.jpg" class="d-block w-100" alt="..." height="700">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  
<?php include "includes/footer.php"; ?>

