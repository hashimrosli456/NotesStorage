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
<div class="container">
    <form method='POST'>
        <div class="form-group">
            <input type="text" placeholder="Title" name="Title_user" class="form-control" ><br>
            <label for="Title" class="form-label">Title:</label>
        </div>
        <div class="form-group">
            <input type="text" placeholder="Notes" name="Note_user" class="form-control" ><br>
            <label for="Notes" class="form-label">Note: </label>
            
        </div>
        <button name='submit'>Submit</button><br>
    </form>
</div>
    </body>
</html>
<?php
    session_start();
    $Count=$_SESSION['count'];
    $sql_connection = mysqli_connect("localhost", "root",null,"note");
    if(isset($_POST['submit'])) {
        $Count=$Count+1;
        $MyTitle = $_POST['Title_user'];
        $MyNote = $_POST['Note_user'];
        $insert_database = "INSERT INTO data_note VALUES ('$Count','$MyTitle', '$MyNote')";
        mysqli_query($sql_connection,$insert_database);
        $_SESSION['count']=$Count;
        header('Location: Index.html');
    }   
?>
