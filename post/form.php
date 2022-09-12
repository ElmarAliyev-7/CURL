<?php
 if( isset($_POST['submit']) ){
     print_r($_POST);
 }
?>

<form action="" method="post">
    Fullname : <br>
    <input type="text" name="fullname"><br>
    Age : <br>
    <input type="number" name="age"/><br>
    <button type="submit" name="submit">Submit</button>
</form>
