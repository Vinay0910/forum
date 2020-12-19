<?php
session_start();

echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/forum">Students Forum</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/forum" >Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
   
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Catogories
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
         
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="contact.php" tabindex="-1" >contacts</a>
      </li>
    </ul>
  <div class="row mx-2"> ';
  if(isset($_SESSION['loggedin'])&&$_SESSION['loggedin']==true){
       echo'<form class="form-inline my-2 my-lg-0">
           <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
           <button class="btn btn-success my-2 my-sm-0" type="submit">search</button>
           <p class="text-light my-0 mx-2"> Welcome! '.$_SESSION['username'].' </p>
           <a href="part/_logout.php" type="button" class="btn btn-outline-danger ml-2"  data-target="#"> logout</a>
           </form>';
    }
    else{
      echo'<form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
          
          </form> 
          <button type="button" class="btn btn-outline-success ml-2" data-toggle="modal" data-target="#loginModal"> login</button>
          <button type="button" class="btn btn-outline-success mx-2" data-toggle="modal" data-target="#signupModal"> signup</button>';
        }
     
    echo'</div>
  </div>
</nav> ' ;
include 'part/_signupmodal.php' ;
include 'part/_loginmodal.php' ;

if(isset($_GET['signupsuccess'])&&$_GET['signupsuccess']==true)
    {echo'<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
          <strong>Success!</strong> You can now login.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';}
    
          
      ?>