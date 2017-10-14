<?php
     // Create Connection
    $conn = mysqli_connect('localhost', 'root', 'givv-master', 'Test');

    // Check Connection
    if (mysqli_connect_errno()) {
        // Connection Failed
        echo 'Failed to connect to mysql' . mysqli_connect_errno();
    }