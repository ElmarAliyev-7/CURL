<?php
if(isset($_POST['submit'])){
    if(empty($_POST['username']) or empty($_POST['password'])){
        echo 'xanalar bos buraxilmamalidir ..';
    }else{
        if($_POST['username'] == 'admin' and $_POST['password'] == '1234'){
            $_SESSION['login'] = true;
            header('Location:index.php');
        }else{
            echo 'Yanlis giris melumatlari';
        }
    }
}
?>

<form action="" method="post">
    Username : <br>
    <input type="text" name="username"/> <br>
    Password : <br>
    <input type="password" name="password"/> <br>
    <button type="submit" name="submit">Login</button>
</form>
