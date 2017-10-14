<?php
    require('db.php');
    $query = 'SELECT * FROM Users;';
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)) {
        $arr[] = $row;
    }
        var_dump($arr);
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
            <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
    </body>

</html>