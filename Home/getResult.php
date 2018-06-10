<?php include "head.php"; ?>

<?php include "navbar.php"; ?>
<?php
  include "../db/dbconn.php";
  include "../db/lib.php"; 
  $getTime = "SELECT id FROM EventDetails order by id desc limit 1";
  $run = mysqli_query($dbcon, $getTime);
  $row = mysqli_fetch_array($run);
?>
   
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    <!-- Empty Space-->
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Even Added succesfully</h1>
      <hr>
      <div class="panel panel-default">
        <div class="panel-heading">Your Event REG no. is :- </div>
        <div class="panel-body">
          <div class="col-md-12 well well-sm">
          <?=$row[0]?>
          <a href="details.php" type="button" class="btn btn-default" style="float: right;">View Details</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/scripts.js"></script>
<?php include "footer.php"?>