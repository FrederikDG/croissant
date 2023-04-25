<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="icon" href="./assets/img/favicon.png" type="image">
  <title>Game Database - Page
    <?php echo ($currentPage + 1 . '/' . $totalPages) ?>
  </title>
</head>

<body>
  <?php echo $content; ?>
</body>

</html>