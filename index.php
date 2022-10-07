<?php include('config.php');?>
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
        <label for="">Name</label>
        <input type="text" name="name">
        <label for="">Email</label>
        <input type="email" name="email">
        <label for="">Address</label>
        <textarea name="address"></textarea>
        <input type="submit" name="send">
    </form>

    <table border="1">
        <tr>
            <th>Roll</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        <?php 
        $fetch = mysqli_query($connect,"select * from students");
        while($row = mysqli_fetch_array($fetch)){?>
        <tr>
            <td><?= $row['roll'];?></td>
            <td><?= $row['name'];?></td>
            <td><?= $row['email'];?></td>
            <td><?= $row['address'];?></td>
            <td><a href="delete.php?del=<?=$row['roll'];?>">X</a></td>
        </tr>
        <?php } ;?>
    </table>
</body>
</html>
<?php
    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $result = mysqli_query($connect,"insert into students(name,email,address)values('$name','$email','$address')");
        if($result){
            echo "ho gya sir ji";
        }
        else{
            echo "nhi hi hua";
        }
    }
?>