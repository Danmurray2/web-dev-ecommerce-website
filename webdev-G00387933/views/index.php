<html>
<?php
include '../partials/header.php'
?>
<main>
  <!-- jumbotron bootstrap class for homepage banner, taken from bootstrap docs-->
  <div class="jumbotron">
    <h1 class="display-4">Welcome to WorldScape Photographs </h1>
    <p class="lead"></p>
    <hr class="my-4">
    <p>A place to browse and buy incredible photos for affordable prices. Check out some samples below and browse the shop when you're ready! </p>
    <p class="lead">
      <a class="btn btn-lg" href="../views/shop.php" role="button">Browse Shop!</a>
    </p>
  </div>
  <div class="row car-container container-fluid">
    <div id="carouselExampleIndicators" class="carousel slide mx-auto col-md-11" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <!-- Bootstrap 4 carousel taken from bootstrap docs. Generate random image id attached to slide 1 -->
        <div class="carousel-item active">
          <img class="d-block w-100 active" id="randomImage" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="../external/aurora-1197753_1920.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="../external/road-1072823_1920.jpg" alt="Third slide">
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
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>

</main>

</html>
<script type="text/javascript" src="../javascript/load-random-image.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
</body>

<?php
include '../partials/footer.php'
?>
</html>
