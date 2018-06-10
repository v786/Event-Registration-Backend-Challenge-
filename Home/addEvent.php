  <?php include "head.php" ;?>

    <?php include "navbar.php"; ?>
   
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    <!-- Empty Space-->
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Add Event</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>

      <form method="post" action="addEvent.php" enctype="multipart/form-data">
        <br>    
        <div class="input-group">
          <span class="input-group-addon">Name</span>
          <input id="msg" type="text" class="form-control" name="name" placeholder="Enter Name">
        </div>
        <br>
        <div class="input-group">
          <span class="input-group-addon">Mobile</span>
          <input id="msg" type="text" class="form-control" name="mobile" placeholder="Mobile Info">
        </div>
        <br>
        <div class="input-group">
          <span class="input-group-addon">E-Mail</span>
          <input id="msg" type="text" class="form-control" name="mail" placeholder="E-Mail Info">
        </div>
        <br>
        <div class="input-group">
          <span class="input-group-addon">ID-Card</span>
          <input id="msg" type="text" class="form-control" name="card" placeholder="Upload Info">
        </div>
        <br>
        <div class="input-group">
          <span class="input-group-addon">Event Type</span>
          <select name="type" class="form-control">
            <option value="Self">Self</option>
            <option value="Group">Group</option>
            <option value="Corporate">Corporate</option>
            <option value="Others">Others</option>
          </select>
        </div>
        <br>
        <div class="input-group">
          <span class="input-group-addon">No. Of Tickets</span>
          <input id="msg" type="text" class="form-control" name="tickets" placeholder="Event Info">
        </div>
        <br>
        <button type="submit" class="btn btn-primary" name="addEvent">Add Event</button>
      </form>
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
</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
<?php include "footer.php"?>
<?php
  include "../db/dbconn.php";
  include "../db/lib.php"; 
  if(isset($_POST['addEvent'])){
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $mail = $_POST['mail'];
    $card = $_POST['card'];
    $type = $_POST['type'];
    $tickets = $_POST['tickets'];
    $inq = "INSERT into student VALUES (NULL,'$name','$mobile','$mail', '$card', $type, $tickets)";
    $query = mysqli_query($dbcon,$inq);
    if($query){
      shout("Event Added");
      loc("addEvent.php");
    }
    else{
      shout("Error $ques");
      loc("addEvent.php");
    }
  }
?>
