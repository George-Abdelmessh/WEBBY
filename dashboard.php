<?php

include 'DB-Config.php';

session_start();

$sql="SELECT * FROM users";
$result=mysqli_query($conn,$sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <h1 style="text-align: center;" class="mb-5">Dashboard</h1>
    <div class="card" style=>
            <div class="card-header card-header-text">
                <h4  style="text-align: center;" class="card-title">Students</h4>
            </div>
    </div>
    <table class="table table-hover" >
    <thead class="text-primary">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Beginner Result</th>
            <th>Intermediate Result</th>
            <th>Advanced Result</th>
           
        </tr>
    </thead>
               
        <?php while($row=mysqli_fetch_assoc($result)){ ?>
            <tr>
                <td><?php echo $row['Name']; ?></td>
                <td><?php echo $row['E-mail']; ?></td>
                <td><?php echo $row['beginner_result']; ?></td>
                <td><?php echo $row['intermediate_result']; ?></td>
                <td><?php echo $row['advanced_result']; ?></td>
               
            </tr>

            <?php }?>
    </table>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>