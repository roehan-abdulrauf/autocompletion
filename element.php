<?php
session_start();
require_once 'back/back_element.php';
// echo $_SESSION['url'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autocompletion</title>
    <link rel="stylesheet" href="css/style2.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- <script src="js/index.js"></script> -->
</head>

<body>
    <header>
        <h1><a href="index.php">Neko Sama</a></h1>
    </header>

    <div class="box">
        <div class="image">
            <a href="<?php echo $_SESSION['url'] ?>" target="_blank"><img src="<?php echo $_SESSION['img'] ?>" alt=""></a>
        </div>
        <div class="content">
            <div class="desc">
                <div> <span class="h1">Name:</span> <span class="element"><?php echo $_SESSION['title'] ?></span></div>
                <div> <span class="h1">Episodes:</span> <span class="element"><?php echo $_SESSION['ep'] ?></span></div>
                <div> <span class="h1">Rate:</span> <span class="element"><?php echo $_SESSION['rate'] ?> <i class='bx bxs-star' style='color:#e4d00b'></i></span></div>
                <div> <span class="h1">Votes:</span> <span class="element"><?php echo $_SESSION['vote'] ?></span></div>
            </div>
            <button><a href="<?php echo $_SESSION['url'] ?>" target="_blank">View anime</a></button>
        </div>
    </div>
</body>

</html