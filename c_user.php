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
  <title>Add New User</title>

</head>

<body>
  <?php
  $connection = mysqli_connect("localhost", "root", "", "grip") or die("Can't connect");
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $balance = $_POST['balance'];
    $sql = "INSERT INTO `Users`(`User_ID`, `Name`, `Email`, `Balance`) 
    VALUES(NULL,'{$name}','{$email}','{$balance}')";
    $result = mysqli_query($connection, $sql);
    if ($result) {
  ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <strong>Successful!</strong> User has been added!
      </div>
  <?php
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
  <h1>Create a new user</h1>
  <div class="dec_bar" style="background-color: #ff6347;">
    <h3> </h3>
    <div class="create-user">
      <img class="img-fluid" src="Image/user.gif" style="border: none; border-radius: 50%;">
      <form class="app-form" method="post">
        <div class="app-form-group">
          <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
        </div>
        <div class="app-form-group">
          <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
        </div>
        <div class="app-form-group">
          <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
        </div>
        <div class="app-form-all-buttons">
          <br><br>
          <input class="app-form-button" type="submit" name="submit" value="Create User"></input>
          <input class="app-form-button" type="reset" value="Reset Information"></input>
        </div>
      </form>
    </div>
  </div>
</body>

</html>
<footer style="background-color: #ff6347;">
      <p><br><br><br>&copy 2021. Made by <b>Vitan Tarpara</b><br>GRIP: TheSparksFoundation.</p>
</footer>