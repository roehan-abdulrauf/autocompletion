<?php
require_once 'back/back_recherche.php';
// var_dump($_SESSION['anime']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Autocompletion</title>
  <link rel="stylesheet" href="css/style.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <!-- <script src="js/index.js"></script> -->
</head>

<body>
  <header>
    <h1><a href="index.php">Neko Sama</a></h1>
  </header>
  <?php require_once 'recherche.php' ?>
  <div class="margin-dg">
  <h2>Quelque recommendation</h2><br>
  </div>
  <section class="products" id="products">
    <div class="box-container">
      <?php
      foreach ($data as $d) {  // var_dump($data );
      ?>
        <div class="box">
          <div class="image">
            <a href="element.php?id=<?= $d['id'];?>"><img src="<?= $d['anime_img']; ?>"></a>
          </div>
          <div class="content">
            <div>
              <a href="<?= $d['anime_url']; ?>">
              <a href="element.php?id=<?= $d['id'];?>"> <h3><?= $d['anime']; ?> </h3></a>
              </a>
            </div>
            <div class="eps_rate">
              <?= $d['episodes']; ?> Eps - Rate: <?= $d['rate']; ?> <i class='bx bxs-star' style='color:#e4d00b'></i>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </section>
  <footer></footer>
</body>

</html>