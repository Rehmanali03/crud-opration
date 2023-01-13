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
<body>
    <form action="" method="post">
        <input type="text" name="fname">
        <br>
        <br>
        <input type="text" name="lname">
        <br>
        <br>
        <label for="">Gender</label>
        <br>
        Male <input type="radio" value="gender" name="gender">
        <br>
        Female <input type="radio" value="gender" name="gender">
        <br>
        <br>
        <select name="department" id="">
        <option value="">Add Department</option>
            <option value="Faculty">Faculty</option>
            <option value="IT">IT</option>
            <option value="Managment">Managment</option>
            <option value="Examination">Examination</option>
            <option value="Fee_Collection">Fee Collection</option>
        </select>
        <br>
        <br>
        <input type="text" name="Salary">
        <br>
        <br>
        <input type="date" name="jdate">
        <br>
        <br>
        <input type="time" name="stime">
        <br>
        <br>
        <input type="time" name="etime">
        <br>
        <br>
        <input type="submit" name="submit">


    </form>

    <?php
    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $department = $_POST['department'];
        $salary = $_POST['Salary'];
        $dateofjoin = $_POST['jdate'];
        $stime = $_POST['stime'];
        $etime = $_POST['etime'];
        
        $query = "insert into `users` values (null, '$fname','$lname','$gender','$department','$salary','$dateofjoin','$stime','$etime')";
        
        $res = mysqli_query($con, $query);
        if($res){
            header('location:fatch.php');
        }
    }
    ?>
</body>
</html>