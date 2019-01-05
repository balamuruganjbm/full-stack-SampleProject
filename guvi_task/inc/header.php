<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sample Project</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./partials/stylesheet.css">
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="./login.php" >Sample Project</a>
            </div>
            <ul class="nav justify-content-right">
            
            <?php session_start();if(isset($_SESSION['name'])):?>
            <li class="nav-item"><a class="nav-link btn btn-outline-success btn-space" href="./getdetails.php">Welcome <?php echo $_SESSION['name']?></a></li>
            <li class="nav-item"><a class="nav-link btn btn-outline-info btn-space" href="./inc/logout.php">logout</a></li>
            <?php else:?>
            <li class="nav-item"><a class="nav-link btn btn-outline-success btn-space" href="./login.php">LOGIN</a></li>
            <li class="nav-item"><a class="nav-link btn btn-outline-info btn-space" href="./register.php">REGISTER</a></li>
            <?php endif;?>
            </ul>
        </div>
</nav>