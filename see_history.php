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
    <link rel="stylesheet" href="CSS_Files/table.css" type="text/css">
    <title>See History</title>

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
    <h1 class="head"><br>TRANSACTION HISTORY</h1>
    <div class="database">
        <?php
        $connection = mysqli_connect("localhost", "root", "", "grip") or die("Can't connect");
        $sql = "SELECT * FROM `Transactions`";
        $result = mysqli_query($connection, $sql);
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            echo "<table><tr><th>S.NO.</th><th>Sender's Name</th><th>Receiver's Name</th><th>Amount Transferred</th></tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row['Sno'] . "</td><td>" . $row['Sender'] . "</td><td>" . $row['Reciever'] . "</td><td>" . $row['Amount'] . "</td>"; ?>
                </tr>
        <?php
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        ?>
    </div>


    <footer style="background-color: #ff6347;">
      <p><br><br><br>&copy 2021. Made by <b>Vitan Tarpara</b><br>GRIP: TheSparksFoundation.</p>
    </footer>
</body>

</html>