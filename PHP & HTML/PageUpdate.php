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
                <input type="text" placeholder="Title" name="Title_user" class="form-control"><br>
                <label for="Title" class="form-label">Title:</label>
            </div>
            <div class="form-group">
                <input type="text" placeholder="Notes" name="Note_user" class="form-control" ><br>
                <label for="Notes" class="form-label">Note: </label>
            </div>
        <button name='update'>Update</button><br>
    </form>
</div>
    </body>
</html>
<?php
    session_start();
    $sql_connection = mysqli_connect("localhost", "root",null,"note");
    $numz= $_SESSION['num'];
    if(isset($_POST['update'])) {
        
        $MyTitle_update = $_POST['Title_user'];
        $MyNote_update = $_POST['Note_user'];
        $Up_database = "UPDATE  data_note SET Title='$MyTitle_update',Note='$MyNote_update' WHERE Num=$numz";
        mysqli_query($sql_connection,$Up_database);
        header('Location: Index.html');
    }
?>
