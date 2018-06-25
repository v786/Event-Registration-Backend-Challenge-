  <?php include "head.php" ;?>

    <?php include "navbar.php"; ?>
   
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    <!-- Empty Space-->
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Welcome</h1>
      <p>List of registered users.</p>
      <hr>
      <table class="table table-bordered table-stripped table-hover" id="sub">
        <thead>
          <tr>
            <th>Host Name</th>
            <th>Contact</th>
            <th>Details</th>
          </tr>
        </thead>
        <tbody>
        <?php 
          include "../db/dbconn.php";
          $query = "SELECT * FROM EventDetails";
          $run = mysqli_query($dbcon, $query);
          while ($row = mysqli_fetch_array($run)) {
            $name = $row[1];
            $password = $row[2];
          ?>
          <tr>
            <td><?=$name?></td>
            <td><?= $password ?></td>
            <td><a href="#">GO</a></td>
          </tr>
          <? } ?>
        </tbody>
      </table>
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
    <script type="text/javascript">
      $(document).ready( function () {
        var table = $('#sub').DataTable();
      } );
    </script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <?php include "footer.php" ?>
