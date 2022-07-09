
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>leaderboard</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gulzar&family=Titillium+Web:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar">
        
        <img src="crown.png"  class="logo" alt="">
        <h1 class="heading">Leaderboard</h1>
        <a href="index.html" class="home">Home</a>
    </nav>
    <div class="container">

        <?php
        $server = "localhost";
        $user = "root";
        $pass = "";
        $db = "leaderboard";
        
        $con = mysqli_connect($server , $user , $pass, $db);
        
        if (!$con) {
            die("failed ". mysqli_connect_error());
        }
        //echo "sucess";
        $sql = "SELECT * from `leaderboard` ORDER BY `Number of guess`;";
        $result = mysqli_query($con, $sql);
        
        // echo mysqli_num_rows($result);
        
        // $row = mysqli_fetch_assoc($result);
        // echo var_dump($row);
        // echo "<br>";
        // $row = mysqli_fetch_assoc($result);
        // echo var_dump($row);
        
        echo "<table  class='table'>";
        echo "<tr><th>Name</th><th>Score</th></tr>";
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr> <td>". $row['NAME'] . "</td><td>".$row['Number of guess']."</td></tr>";
        }
        echo "</table>";
        ?>
    </div>
        
    </body>
    </html>