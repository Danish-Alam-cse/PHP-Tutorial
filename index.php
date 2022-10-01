<?php
    $con = mysqli_connect("localhost","root","","college");
    if(!$con){
        echo "nhi hua";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Mysqli Crud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <a href="" class="navbar-brand">PHP MYSQLI CRUD</a>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4">
              <form action="" method="POST">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <textarea name="address" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success form-control" name="register">
                </div>
            </form>
            </div>
            <div class="col-lg-8">
                <table class="table table-hover table-striped">
                    <tr>
                        <th>Roll</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                    </tr>
                    <?php
                    $res = mysqli_query($con,"select * from students");
                    while($row = mysqli_fetch_array($res)){?>
                    <tr>
                        <td><?= $row['roll'];?></td>
                        <td><?= $row['name'];?></td>
                        <td><?= $row['email'];?></td>
                        <td><?= $row['address'];?></td>
                    </tr>
                    <?php } ;?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

<?php
    if(isset($_POST['register'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $add = $_POST['address'];

        $result = mysqli_query($con,"insert into students(name,email,address)values('$name','$email','$add')");
        if($result){
            echo "ho gya";
        }
        else{
            echo "nhi hua";
        }
    }
?>
