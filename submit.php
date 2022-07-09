

<?php
if(isset($_POST['name'])){
    $server = "localhost";
    $user = "root";
    $pass = "";

    $con = mysqli_connect($server , $user , $pass);

    if (!$con) {
        die("failed ". mysqli_connect_error());
    }
    //echo "sucess";
    $name=$_POST['name'];
    $score=$_POST['count'];
    $sql = "INSERT INTO `leaderboard`.`leaderboard` (`NAME`, `Number of guess`, `Time`) VALUES ('$name', '$score', current_timestamp());";

    if ($con->query($sql)==true) {
        echo "Entered the leaderboard";
        header("Location: leaderboard.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rakings of kings</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="nav">
        <h1 class="heading">
            Enter Your Name 
        </h1>
    </nav>
    <div class="container">
        <h2 class="h2">
            leaderboard
        </h2>
        <form action="submit.php" method="post">
            <input type="text" name="name" id="name" class="name">
            
            <button class="sub">Submit</button>
        </form>
    </div>
</body>
</html>