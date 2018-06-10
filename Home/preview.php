<?php
session_start();
include "../db/dbconn.php";
include "../db/lib.php"; 
if(isset($_POST['eventPreview'])){
  $name = $_POST['name'];
  $mobile = $_POST['mobile'];
  $mail = $_POST['mail'];
  //$card = $_POST['card'];
  $target_file = 'upload/';
  $card = basename($_FILES['card']['name']);
  if(move_uploaded_file($_FILES["card"]["tmp_name"], $target_file.$card)){
    shout('Sucess');
  }
  else{
    shout('failure');
  }
  $type = $_POST['type'];
  $tickets = $_POST['tickets'];
  $inq = array(NULL, $name, $mobile, $mail, $card, $type, $tickets);
  $_Session['eventDetails'] = $inq;
}
?>
<?php include "head.php" ;?>

<?php include "navbar.php"; ?>
<div class="col-md-8">
      <div class="panel panel-default" style="padding-left: 10px">
        <h3>
           Event Details
        </h3>
      </div>
      <div class="panel panel-body">
      <p>
        <?=$inq[1]?>
      </p>
      </div>
      <div class="panel panel-default" style="padding: 10px">
      <h3>
        Confirm Details :-
      </h3>
      <form class="form-horizontal" role="form" action="preview.php" method="post">
        <div class="form-group">        
          <div class=" col-sm-10">
            <div class="checkbox">
              <label>
                <input type="hidden" name="name" value="<?=$name?>">
                Name: <?=$inq[1]?>
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">        
          <div class=" col-sm-10">
            <div class="checkbox">
              <label>
                <input type="hidden" name="mobile" value="<?=$mobile?>">
                Mobile: <?=$inq[2]?>
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-10">
            <div class="checkbox">
              <label>
                <input type="hidden" name="mail" value="<?=$mail?>">
                E-mail: <?=$inq[3]?>
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-10">
            <div class="checkbox">
              <label>
                <input type="hidden" name="card" value="<?=$card?>">
                ID Card: <?=$inq[4]?>
                <img src="upload/<?=$inq[4]?>">
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-10">
            <div class="checkbox">
              <label>
                <input type="hidden" name="type" value="<?=$type?>">
                Event Type: <?=$inq[5]?>
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-10">
            <div class="checkbox">
              <label>
                <input type="hidden" name="tickets" value="<?=$tickets?>">
                Event Tickets: <?=$inq[6]?>
              </label>
            </div>
          </div>
        </div>
        <div class="col-md-8" style="padding: 10px;margin: 5px;">
          <div class="col-sm-6">
            <a class="btn btn-warning" href="addEvent.php">
              Review
            </a>
            </button>
          </div>
          <div class="col-sm-6">
            <button type="submit" class="btn btn-success" name="addEvent">
              Confirm Event
            </button>
          </div>
        </div>
      </form>
      </div>
    </div>
<?php include "footer.php"?>

<?php
  if(isset($_POST['addEvent'])){
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $mail = $_POST['mail'];
    $card = $_POST['card'];
    $type = $_POST['type'];
    $tickets = $_POST['tickets'];
    $date = date();
    $query = "INSERT into EventDetails VALUES (NULL,'$name','$mobile','$mail', '$card', '$type', '$tickets', '$date')";
    $result = mysqli_query($dbcon,$query);
    if($result){
      shout("Event Added");
      loc("getResult.php");
    }
    else{
      shout("Error $name");
      loc("preview.php");
    }
  }
?>