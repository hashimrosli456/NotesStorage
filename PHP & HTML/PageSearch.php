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
    $sql_connection = mysqli_connect("localhost", "root",null,"note");
    if(isset($_POST['update'])) {
        $MyNum_Search = $_POST['Num_user'];
        $database = "SELECT * FROM data_note";
        $database_sent = mysqli_query($sql_connection,$database);
        while($database_receive = mysqli_fetch_assoc($database_sent)){
            if($MyNum_Search==$database_receive['Num']){
                $_SESSION['num']=$MyNum_Search;
                header('Location: PageUpdate.php');
            }
        }
        echo "<br>";
        echo "ID Not Found !!";
    }
    else if(isset($_POST['Home'])){
        header('Location: Index.html');}

?>

<div class="container">
    <form method='POST'>
        <div class="form-group">
            <input type="text" placeholder="Num" name="Num_user" class="form-control" ><br>
            <label for="Num"class="form-label">Num:</label>
        </div>
        <button name='update'>Update</button><br><br>
        <button name='Home'>Home</button><br>
    </form>
</div>