<?php
    include "conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        .heading{
            font-size: 25px;
            text-decoration: none;
            color: #000;
        }
        .buttone{
            background-color: #87CEEB;
            padding: 5px 10px;
            border: none;
        }
        .buttond{
            background-color: red;
            padding: 5px 10px;
            border: none;
        }
    </style>
<body>

    <a href="add.php" class="heading"><h1>ADD Data</h1></a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Department</th>
        <th>Salary</th>
        <th>Date Of Joining</th>
        <th>Shift Start Time</th>
        <th>Shift End Time</th>
        <th colspan="2">Action</th>
    </tr>
    <?php
        $query = "select * from `users`";
        $res = mysqli_query($con,$query);
        while($show = mysqli_fetch_assoc($res)){
    ?>

    <tr>
        <td><?=$show['id']?></td>
        <td><?=$show['First Name']?></td>
        <td><?=$show['Last Name']?></td>
        <td><?=$show['Gender']?></td>
        <td><?=$show['Department']?></td>
        <td><?=$show['Salary']?></td>
        <td><?=$show['Date of joining']?></td>
        <td><?=$show['Shift Start time']?></td>
        <td><?=$show['Shift end time']?></td>
        <td><a href="update.php?id=<?=$show['id']?>"><button class="buttone">Edit</button></a></td>
        <td><a href="delet.php?id=<?=$show['id']?>"><button class="buttond">Delete</button></a></td>
    </tr>
    <?php
        }
    ?>
</table>
</body>
</html>