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

  
 
    <!-- Category container starts here -->
    <div class="container my-4" id="ques">
        <h2 class="text-center my-4">Welcome To Medical Forum</h2>
        <div class="row my-4">
      
         
          <!-- Fetch all the categories and use a loop to iterate through categories -->
         <?php 
         $sql = "SELECT * FROM `medical`"; 
         $result = mysqli_query($conn, $sql);
         while($row = mysqli_fetch_assoc($result)){
           //echo $row['category_id'];
          // echo $row['category_name'];
          $id = $row['streams_id'];
          $cat = $row['streams_name'];
          $desc = $row['streams_desc'];
          echo '<div class="col-md-4 my-2">
                  <div class="card" style="width: 18rem;">
                      <img src="img/med'.$id. '.jpg" class="card-img-top" alt="image for this category">
                      <div class="card-body">
                        <h5 class="card-title"><a href="threadlist2.php?catid=' . $id . '">' . $cat. '</a></h5>
                        <p class="card-text">' . substr($desc, 0, 90). '... </p>
                        <a href="threadlist2.php?catid=' . $id . '" class="btn btn-primary">View Threads</a>
                      </div>
                  </div>
                </div>';
                   }    

        
       ?>
     

    <?php include 'part/footer.php';?>
      <!-- jQuery and Bootstrap Bundle (includes Popper) -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>

