<?php
    include("config.php");
    if(isset($_GET['edit'])){
        $edit = $_GET['edit'];
        $query = mysqli_query($connect,"select * from students where roll='$edit'");
        $row = mysqli_fetch_array($query);

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
        <label for="">Name</label>
        <input type="text" name="name" value="<?= $row['name'];?>">
        <label for="">Email</label>
        <input type="email" name="email" value="<?= $row['email'];?>">
        <label for="">Address</label>
        <textarea name="address"><?= $row['address'];?></textarea>
        <input type="submit" name="update">
    </form>
    <?php } ;?>
</body>
</html>

<?php 
    if(isset($_POST['update'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $edit = $_GET['edit'];
        $result = mysqli_query($connect,
        "update students set name='$name', email='$email',address='$address' where roll = '$edit'");
        if($result){
            header('Location:index.php');
        }
        else{
            echo "edit nhi hua";
        }
    }

?>