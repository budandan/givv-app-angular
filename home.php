
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
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar">Login</span>
                    <span class="icon-bar">Register</span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">GIVV</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="my-profile.php">My Profile</a></li>
                    <li><a href="project-list.php">Projects</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <br>
        <br>
        <div class='row'>
            <div class='col-md-3'></div>
            <div class='col-md-6'>
                <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
                    <div class='form-group'>
                        <label>Name</label>
                        <input type='text' name='name' class='form-control'>
                    </div>
                    <div class='form-group'>
                        <label>Password</label>
                        <input type='password' name='password' class='form-control'>
                    </div>
                    <div class='text-center'>
                        <button class='submit-button' type='submit' name='submit'>Login</button>
                    </div>
                </form>
            </div>
            <div class='col-md-3'></div>
        </div> 

    </body>

</html>