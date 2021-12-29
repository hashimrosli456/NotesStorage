<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"href="css/style.css"type="text/css">
    
</head>

<body>
    <style>
        body{
            height:100%;
            display:flex;
            justify-content: space-around;
            align-items: center;
            flex-direction: column;
            background-image: url('images/gambar.jpg');
            font-family: 'Aclonica';
        }
    </style>

    <?php 
    session_start();
    $sql_connection = mysqli_connect("localhost", "root",null,"note");
    $database = "SELECT * FROM data_note";
    $Count=0;
    $database_sent = mysqli_query($sql_connection,$database);
    echo '<p style="line-height:30px;">';
    ?>
    <ul>
        <?php while($database_receive = mysqli_fetch_assoc($database_sent)) {  ?>
            <li>
                   <a href="#">
                    <?php $Count=$Count+1;?>
                    <span><h2><?php echo $database_receive['Num'] . '.  ' ;?></h2>
                    <h2><?php echo $database_receive['Title'] . '    ' ;?></h2></span>
                    <p><?php echo $database_receive['Note'];?></p>
                    <br>
                </a>
            <?php } $_SESSION['count']=$Count;?>
        </li>
    </ul>
</body>
</html>