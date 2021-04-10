<!DOCTYPE html5>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="CSS_Files/navbar.css" type="text/css">
  <link rel="stylesheet" href="CSS_Files/style.css" type="text/css">
  <link rel="stylesheet" href="CSS_Files/create_us.css" type="text/css">
  <link rel="stylesheet" href="CSS_Files/usersel.css" type="text/css">
  <title>Transfer Money</title>

</head>

<body style="background-color:#ff6347 ">
  <?php
  $connection = mysqli_connect("localhost", "root", "", "grip") or die("Can't connect");
  if (isset($_POST['submit'])) {
    $trans_from = $_POST['from'];
    $trans_to = $_POST['to'];
    $trans_amount = $_POST['Amount'];

    $self = "SELECT * FROM Users WHERE USER_ID = $trans_from";
    $resultf = mysqli_query($connection, $self);
    $user_fr = mysqli_fetch_assoc($resultf);


    $selt = "SELECT * FROM Users WHERE USER_ID = $trans_to";
    $resultt = mysqli_query($connection, $selt);
    $user_to = mysqli_fetch_assoc($resultt);

    if ($trans_amount < 0) {
  ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <strong>WARNING!</strong> Please enter a positive transfer amount!
      </div>
    <?php
    }
    if ($trans_amount == 0) {
    ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <strong>WARNING!</strong> Please enter a non - zero positive transfer amount!
      </div>
    <?php
    }
    if ($trans_amount > $user_fr['Balance']) {
    ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <strong>WARNING!</strong> Sender does not have sufficient balance!
      </div>
      <?php
    } 
    else if(($trans_amount>0)&&($trans_amount<$user_fr['Balance'])){
      $new = $user_fr['Balance'] - $trans_amount;
      $sql = "UPDATE `Users` SET `Balance` = $new WHERE `Users`.`User_ID` = $trans_from";
      $execute = mysqli_query($connection, $sql);

      $new = $user_to['Balance'] + $trans_amount;
      $sql = "UPDATE `Users` SET `Balance` = $new WHERE `Users`.`User_ID` = $trans_to";
      $execute = mysqli_query($connection, $sql);

      $sendername = $user_fr['Name'];
      $recname = $user_to['Name'];
      $insert = "INSERT INTO `Transactions`(`Sno`, `Sender`, `Reciever`, `Amount`) 
    VALUES(NULL,'{$sendername}','{$recname}','{$trans_amount}')";
      $execute = mysqli_query($connection, $insert);
      if ($execute) {
      ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
          </button>
          <strong>SUCCESSFUL!</strong> Money has been transferred!
        </div>
  <?php
      }
      $new = 0;
      $trans_amount = 0;
    }
  }
  ?>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="index.php"><b>GRIP BANK</b></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="c_user.php">Create User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="money_trans.php">See All Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="userselected.php">Transfer Money</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="see_history.php">See Transaction History</a>
        </li>
      </ul>
    </div>
  </nav>
  <h1><br>MONEY TRANSACTION</h1>
  <div class="row activity text-center">

    <div class="col-md act">
      <img class="img-fluid" src="Image/1.jpg" style="border: none;height:325px;width:400px;">
      <form class="app-form" method="post">
        <label style="color : black;"><b>Transfer From:</b></label>
        <select name="from" class="form-control" required>
          <option value="" disabled selected>Choose</option>
          <?php
          $connection = mysqli_connect("localhost", "root", "", "grip") or die("Can't connect");
          $sql = "SELECT * FROM `Users`";
          $result = mysqli_query($connection, $sql);
          while ($rows = mysqli_fetch_assoc($result)) {
          ?>
            <option class="table" value="<?php echo $rows['User_ID']; ?>">
              <?php echo $rows['Name']; ?> [Balance:
              <?php echo $rows['Balance']; ?> ]</option>
          <?php
          }
          ?>
        </select>
    </div>

    <div class="col-md act">
      <img class="img-fluid" src="Image/to.jpg" style="border: none;height:325px;width:400px;">
      <form class="app-form" method="post">
        <br>
        <label style="color : black;"><b>Transfer To:</b></label>
        <select name="to" class="form-control" required>
          <option value="" disabled selected>Choose</option>
          <?php
          $connection = mysqli_connect("localhost", "root", "", "grip") or die("Can't connect");
          $sql = "SELECT * FROM `Users`";
          $result = mysqli_query($connection, $sql);
          while ($rows = mysqli_fetch_assoc($result)) {
          ?>
            <option class="table" value="<?php echo $rows['User_ID']; ?>">
              <?php echo $rows['Name']; ?> [Balance:
              <?php echo $rows['Balance']; ?> ]</option>
          <?php
          }
          ?>
        </select>
    </div>

    <div class="col-md act">
      <img class="img-fluid" src="Image/transfer.jpg" style="border: none;height:325px;width:400px;">
      <form class="app-form" method="post">
        <br><br>
        <div class="app-form-group" style="background-color:white;">
          <input class="app-form-control" placeholder="Amount To Be Transferred" type="number" name="Amount" required>
        </div>
        <div class="app-form-all-buttons">
          <button type="submit" class="btn" name='submit' style="width: 300px; background-color : black;">
            <h3 style="color:white;"><b>Transfer</b></h3>
          </button>
      </form>
    </div>
    
  </div>
  <footer style="background-color: #ff6347;">
      <p><br><br><br>&copy 2021. Made by <b>Vitan Tarpara</b><br>GRIP: TheSparksFoundation.</p>
  </footer>
</body>

</html>