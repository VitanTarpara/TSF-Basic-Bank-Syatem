<!DOCTYPE html>
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

  <title>Basic Banking System</title>

</head>

<body>
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

  <div class="container-fluid">
    <div class="row intro" style="background-color: #ff6347;">
      <div class="col-sm-12 col-md">
        <div class="heading text-center">
          <br>
          <br><br><br>
          <h1>GRIP Bank</h1>
          <h1>Welcome to The Sparks Foundation</h1>
        </div>
      </div>
      <div class="col-sm-12 col-md img text-center">
        <img src="Image/b.jpg" alt="Banking" class="img-fluid" style="height:80%;width:80%;" />
      </div>
    </div>
    <div class="row activity text-center">
      <div class="col-md act">
        <img src="Image/user.gif" alt="userImg" class="img-fluid" style="height:80%;width:80%;">

        <a href="c_user.php"><button style="background-color: #C86DFB;"><b>Create User</b></button></a>
      </div>
      <div class="col-md act">
        <img src="Image/trans.gif" alt="TransferImg" class="img-fluid" style="height:80%;width:80%;">
        <a href="userselected.php"><button style="background-color: #C86DFB;"><b>Transfer Money</b></button></a>
      </div>
      <div class="col-md act">
        <img src="Image/history.jpg" alt="HistoryImg" class="img-fluid" style="height:80%;width:80%;">
        <a href="see_history.php"><button style="background-color: #C86DFB;"><b>Transaction History</b></button></a>
      </div>
    </div>
    <br>
    <br>
    <footer style="background-color: #ff6347;">
      <p><br><br><br>&copy 2021. Made by <b>Vitan Tarpara</b><br>GRIP: TheSparksFoundation.</p>
    </footer>
</body>

</html>