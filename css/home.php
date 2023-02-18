<?php

@include 'config.php';

if(isset($_POST['submit1'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);

    $insert = "INSERT INTO purchase(name, quantity) VALUES('$name','$quantity')";
    mysqli_query($conn, $insert);
};
if(isset($_POST['submit2'])){

    $employee_acess_code = mysqli_real_escape_string($conn, $_POST['code']);
    $passkey = mysqli_real_escape_string($conn, $_POST['passkey']);
 
     $insert = "INSERT INTO passkeys(employee, passkey) VALUES('$employee_acess_code','$passkey')";
     mysqli_query($conn, $insert);
 };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <h2 id="homehead">
        Welcome User
    </h2>
    <div class="form-container">
    <div class="formbody">
        <form action="" method="post" class="formx">
            <h3>Purchase</h3>
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>
            <input type="text" name="name" required placeholder="Product name">
            <input type="number" name="quantity" required placeholder="Quantity">
            <input type="submit" name="submit1" value="Purchase" class="form-btn">
        </form>
        <form action="" method="post">
            <h3>Passkeys</h3>
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>
            <input type="text" name="code" required placeholder="enter employee acess code">
            <input type="text" name="passkey" required placeholder="enter your password">
            <input type="submit" name="submit2" value="register now" class="form-btn">
        </form>
    </div>        
</div>
</body>
</html>