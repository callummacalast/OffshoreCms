<!-- includes the header for the clinet side -->
<?php include "includes/header.php"; ?>

<?php include "includes/navigation.php"; ?>
<br>
<h2 class="display-5 text-center">Welcome to our Gallery</h2>
<div class="gallery_description">
  <p>Offshore has a passion for surfing, exploration and creating great content.</p>

</div>


<div class="video-container">
    <video width="620" height="240" controls>
      <source src="./Videos/Offshorevid.mp4" type="video/mp4">
    </video>
</div>

<blockquote class="blockquote text-center">
<footer class="blockquote-footer m-3">Shots by George Morgan</footer>

</blockquote>

<div id="carouselExampleIndicators" class="carousel slide col-12 mx-auto my-auto" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/beachVan.jpg" class="d-block mx-auto my-auto" alt="..." height="700" width="80%">
    </div>
    <div class="carousel-item">
      <img src="images/SurfboardsVan.jpg" class="d-block mx-auto my-auto" alt="..." height="700" width="90%">
    </div>
    <div class="carousel-item">
      <img src="images/BlueShirt.jpg" class="img-responsove d-block h-sm-50 mx-auto my-auto" alt="..." height="700" width="90%">
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
<br>




  
<?php include "includes/footer.php"; ?>

