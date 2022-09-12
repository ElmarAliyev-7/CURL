<?php
    if(isset($_POST['submit'])){
        if($_FILES['cv']['type'] == 'text/plain'){
            move_uploaded_file($_FILES['cv']['tmp_name'], 'uploads/'.$_FILES['cv']['name']);
        }else{
            echo 'uygun olmayan fayl formati';
        }
    }
?>

<form action="" method="post" enctype="multipart/form-data">
    Fullname : <br>
    <input type="text" name="fullname"><br>
    Cv : <br>
    <input type="file" name="cv"/><br><br>
    <button type="submit" name="submit">Submit</button>
</form>