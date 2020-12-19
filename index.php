<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>WELCOME TO STUDENTS FORUM</title>
  </head>
  <body>
    <?php include 'part/db_connect.php';?>
    <?php include 'part/header.php';?>

    <!-- Slider starts here -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slide1.jpg " class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/best.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slide2.jpg" class="d-block w-100" alt="...">
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
    
    <!-- Category container starts here -->
    <div class="container my-4" id="ques">
        <h2 class="text-center my-4">Welcome To Students Forum</h2>
        <div class="row my-4">
          <!-- Fetch all the categories and use a loop to iterate through categories -->
      <div class="card-deck">
                  <div class="card" style="width: 20rem;">
                      <img src="img/card2.jpg" class="card-img-top" alt="image for this category">
                      <div class="card-body">
                        <h5 class="card-title">Engineering</h5>
                        <p class="card-text">Engineering stream is related to the medication line. If you are interested in applied science.....</p>
                        <a href="colleges1.php" class="btn btn-primary">View colleges</a>
                      </div>
                  </div>
                  <div class="card" style="width: 20rem;">
                      <img src="img/card1.jpg" class="card-img-top" alt="image for this category">
                      <div class="card-body">
                        <h5 class="card-title">Medical</h5>
                        <p class="card-text">Medical stream is related to the medication line. If you are interested in natural science you are welcome.....  </p>
                        <a href="colleges2.php" class="btn btn-primary">View colleges</a>
                      </div>
                   
                  </div>
                  <div class="card" style="width: 20rem;">
                      <img src="img/card.jpg" class="card-img-top" alt="image for this category">
                      <div class="card-body">
                        <h5 class="card-title">Commerce</h5>
                        <p class="card-text">Commerce stream is related to the business. If you are interested in economics,banking.....  </p>
                        <a href="colleges3.php" class="btn btn-primary">View colleges</a>
                      </div>
                  </div>
        </div>
       </div>
       </div>
       

    <?php include 'part/footer.php';?>
      <!-- jQuery and Bootstrap Bundle (includes Popper) -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>