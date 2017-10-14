<?php
    include ('index.php');
    // Create Connection
    $conn = mysqli_connect(DB_HOST, 'root', 'givv-master', 'test');

    // Check Connection
    if (mysqli_connect_errno()) {
        // Connection Failed
        echo 'Failed to connect to mysql' . mysqli_connect_errno();
    }

    