<?php
if(isset($_POST["submit"])) {

    if($_POST["USERNAME"] == "teguh" && $_POST["PASSWORD"] == "123") {

        header("Location: hallo.php");
        exit;

    } else {
        $gagal = true;
    }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>LOGIN ADMIN</h1>

    <?php if(isset($gagal) ) :?>
        <p style="color: red; font-style: italic;">USERNAME / PASSWORD SALAH!!</p>
     <?php endif;?>   

    <ul>
    <form action="" method="post">
        <li>
            <label for="USERNAME">Username : </label>
            <input type="text" name="USERNAME" id="USERNAME">
        </li>
        <li>
            <label for="PASSWORD">Password :</label>
            <input type="PASSWORD" name="PASSWORD" id="PASSWORD">
        </li>
        <button type="submit" name="submit"> Login </button>
        
    </form>
    </ul>


</body>
</html>