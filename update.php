<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD-UPDATE</title>
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
                        
                        <?php
                        include 'connection.php';
                        $ids = $_GET['id'];
                        $showquery = "SELECT * FROM `jobregistration` WHERE id=$ids";
                        $showdata = mysqli_query($conn,$showquery);
                        $arrdata = mysqli_fetch_assoc($showdata);
                        if(isset($_POST['register'])){
                            $idupdate = $_GET['id'];
                            $name = $_POST['user'];
                            $degree = $_POST['degree'];
                            $mobile = $_POST['mobile'];
                            $email = $_POST['email'];
                            $refer = $_POST['refer'];
                            $jobpost = $_POST['jobpost'];

                            $query = "UPDATE `jobregistration` SET `id`='$idupdate',`name`='$name',`degree`='$degree',`mobile`='$mobile',`email`='$email',`refer`='$refer',`jobpost`='$jobpost' WHERE id=$idupdate";

                            $result = mysqli_query($conn,$query);
                            if ($result) {
                                ?><script>alert('Data Updated Successfully');</script><?php
                                header('location:display.php');
                            } else {
                                ?><script>alert('!!!Opps Data Not Updated Properly!!!');</script><?php
                            }
                        }
                        ?> 
                        
                        <div class="boxs">
                            <div class="input-box">
                                <input type="text" name="user" placeholder="Enter your name *" value="<?php echo $arrdata['name']; ?>">
                            </div>
                            <div class="input-box">
                                <input type="text" name="degree" placeholder="Enter your qualification *" value="<?php echo $arrdata['degree']; ?>">
                            </div>
                            <div class="input-box">
                                <input type="text" name="mobile" placeholder="Mobile number *" value="<?php echo $arrdata['mobile']; ?>">
                            </div>
                            <div class="input-box">
                                <input type="text" name="email" placeholder="Emaiol ID *" value="<?php echo $arrdata['email']; ?>">
                            </div>
                            <div class="input-box">
                                <input type="text" name="refer" placeholder="Any references *" value="<?php echo $arrdata['refer']; ?>">
                            </div>
                            <div class="input-box">
                                <input type="text" name="jobpost" placeholder="Designation" value="<?php echo $arrdata['jobpost']; ?>">
                            </div>
                        </div>
                        <div class="reg">
                            <input type="submit" value="Update" class='btn2' name="register">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
