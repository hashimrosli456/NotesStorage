<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet"href="css/style.css"type="text/css">
    </head>
    <body>  
        <style>
            body{
                background-image: url('images/gambar2.jpg');
            }
        </style>
    </body>
</html>
<?php
    session_start();
    $num_count=$_SESSION['count'];
    $sql_connection = mysqli_connect("localhost", "root",null,"note");
    if(isset($_POST['delete'])) {
        $user_Num = $_POST['Num_user'];
        $Del_database = "DELETE FROM  data_note WHERE Num=$user_Num";
        mysqli_query($sql_connection,$Del_database);
        $num_count=$num_count-1;
        $newNum = $user_Num + 1;
        while($newNum<=$_SESSION['count']){
            $Up_database = "UPDATE  data_note SET Num=$user_Num WHERE Num=$newNum";
            mysqli_query($sql_connection,$Up_database);
            $newNum = $newNum + 1;
            $user_Num = $user_Num + 1;
        }
        $_SESSION['count']=$num_count;
        header('Location: Index.html');
    }
?>
<div class="container">
<form method='POST'>
    <div class="form-group">
    <input type="text" placeholder="Num" name="Num_user" class="form-control">
    <label for="Num" class="form-label">Text Number:</label>
    </div>
    <button name='delete'>Delete</button><br>
</form>
</div>