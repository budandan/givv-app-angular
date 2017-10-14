<?php
    include ('config.php');
    // Create Connection
    $conn = mysqli_connect('localhost', 'root', 'givv-master', 'Test');

    // Check Connection
    if (mysqli_connect_errno()) {
        // Connection Failed
        echo 'Failed to connect to mysql' . mysqli_connect_errno();
    }
    
    echo "<script type='text/javascript'>alert('before sql');</script>";
    $query = 'SELECT * FROM Users;';

    $result = mysqli_query($conn, $query);
    echo "<script type='text/javascript'>alert('after sql');</script>";
    $users = mysqli_fetch_all($result, MYSQL_ASSOC);
    var_dump($users);
    mysqli_free_result($result);

    mysqli_close($conn);

?>
<!DOCTYPE html>
<html>
    <head>
            <link rel="stylesheet" href="https://bootswatch.com/paper/bootstrap.min.css">
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
            <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
            <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
            <link href='./style.css' rel='stylesheet' type='text/css'>
            <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
        <p></p>
    </body>

</html>