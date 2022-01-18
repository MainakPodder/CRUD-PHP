<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD-DISPLAY</title>
    <link rel="stylesheet" href="CSS/display.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<body>
    <div class="main-div">
        <h1>List of candidates for web developer job</h1>
        <div class="center-div">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>DEGREE</th>
                        <th>MOBILE</th>
                        <th>EMAIL</th>
                        <th>REFER</th>
                        <th>POST</th>
                        <th colspan=2>OPERATION</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include 'connection.php';
                    $selectquery = "SELECT * FROM `jobregistration`";
                    $query = mysqli_query($conn,$selectquery);
                    while ($res = mysqli_fetch_assoc($query)) {
                        ?>
                            <tr>
                                <td><?php echo $res['id']; ?></td>
                                <td><?php echo $res['name']; ?></td>
                                <td><?php echo $res['degree']; ?></td>
                                <td><?php echo $res['mobile']; ?></td>
                                <td><?php echo $res['email']; ?></td>
                                <td><?php echo $res['refer']; ?></td>
                                <td><?php echo $res['jobpost']; ?></td>
                                <td>
                                    <a href="update.php?id=<?php echo $res['id']; ?>" class="edit">
                                        <div class="tooltip update">Update</div>
                                        <i class="far fa-edit"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="delete.php?id=<?php echo $res['id']; ?>" class="delete">
                                        <div class="tooltip ">Delete</div>
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php
                    }
                ?>         
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>