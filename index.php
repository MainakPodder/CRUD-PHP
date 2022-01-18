<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD-PHP</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="content1">
                <div class="massages">
                    <h2 class="color">Welcome</h2>
                    <p class='alert color'>Plese fill all the details carefully.This form can change your life.</p>
                    <a href="display.php"><button class='btn1'>Check Form</button></a>
                </div>
            </div>
            <div class="content2">
                <div class="register">
                    <form method="POST" action="#" class="form">
                        <div class="heading">
                            <h2 class="color">Apply for Web Developer Post</h2>
                        </div>
                        <div class="boxs">
                            <div class="input-box">
                                <input type="text" name="user" placeholder="Enter your name *">
                            </div>
                            <div class="input-box">
                                <input type="text" name="degree" placeholder="Enter your qualification *">
                            </div>
                            <div class="input-box">
                                <input type="text" name="mobile" placeholder="Mobile number *">
                            </div>
                            <div class="input-box">
                                <input type="text" name="email" placeholder="Email ID *">
                            </div>
                            <div class="input-box">
                                <input type="text" name="refer" placeholder="Any references *">
                            </div>
                            <div class="input-box">
                                <input type="text" name="jobpost" placeholder="Designation">
                            </div>
                        </div>
                        <div class="reg">
                            <input type="submit" value="Register" class='btn2' name="register">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
 include 'connection.php';
 if(isset($_POST['register'])){
    $name = $_POST['user'];
    $degree = $_POST['degree'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $refer = $_POST['refer'];
    $jobpost = $_POST['jobpost'];

    $insertquery = "INSERT INTO `jobregistration`(`name`, `degree`, `mobile`, `email`, `refer`, `jobpost`) VALUES ('$name','$degree','$mobile','$email','$refer','$jobpost')";

    $result = mysqli_query($conn,$insertquery);
    if ($result) {
        ?><script>alert('Data Inserted Successfully');</script><?php
    } else {
        ?><script>alert('!!!Opps Data Not Inserted Properly!!!');</script><?php
    }
 }
?>