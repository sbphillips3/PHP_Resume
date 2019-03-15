<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styles.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Credentials -- Work Experience</title>
  </head>
  <body>
  <h1>Credentials<h1> 
  <?php 
  include_once 'pageFunctions.php';
  include_once 'Work.php';
  nav();
  ?>

<h3>Experience</h3>


<div class="container">
  
  <div class="row">

  <?php
      $work1 = new Work("images/ups.jpg", "Untied Parcel Service", "Sorter, Pick-Off, Package-Handler", "2002", "Current", 
      "My responsibility is to ensure that customer packages get to their appropriate destinations in a timely and safe manner.");

      $work2 = new Work("images/black.jpg", "Black & Decker", "Customer Service Associate", "July 2001", "January 2002",
      "My repsponsibilities included helping customers find the right product to fit their needs, both in-person and via the telephone.");
  
      echo $work1;

      columnBuffer();

      echo $work2;
  ?>
    
  </div>
</div>
    <?php ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>