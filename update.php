<?php
    include ('conn.php');
    
    $id = $_GET['id'];

    $query = "select * from `users` where `id` = $id";
    $res = mysqli_query($con, $query);
    $users = mysqli_fetch_assoc($res);
?>

<form action="" method="post">
        <input type="text" value="<?= $users['First Name'] ?>" name="fname">
        <br>
        <br>
        <input type="text" value="<?= $users['Last Name'] ?>" name="lname">
        <br>
        <br>
        <!-- <label for="">Gender</label>
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
        </select> -->
        <br>
        <br>
        <input type="text" value="<?= $users['Salary'] ?>" name="Salary">
        <br>
        <br>
        <input type="date" value="<?= $users['Date of joining'] ?>" name="jdate">
        <br>
        <br>
        <input type="time" value="<?= $users['Shift Start time'] ?>" name="stime">
        <br>
        <br>
        <input type="time" value="<?= $users['Shift end time'] ?>" name="etime">
        <br>
        <br>
        <input type="submit" name="update">


    </form>

    <?php
    if(isset($_POST['update'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        // $gender = $_POST['gender'];
        // $department = $_POST['department'];
        $salary = $_POST['Salary'];
        $dateofjoin = $_POST['jdate'];
        $stime = $_POST['stime'];
        $etime = $_POST['etime'];
        
         echo $q = " update `users` set `First Name` = $fname, `Last Name` = $lname,
          `Salary` = $salary,
          `Date of joining` = $dateofjoin, `Shift Start time`= $stime, `Shift end time` = $etime
           where `id` = $id";
        
           $update = mysqli_query($con, $q);
        if($update){
            echo "<script>alert('Data Inserted')</script>";
            header('location:fatch.php');
            die;
        }
    }
