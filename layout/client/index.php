<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/aa6d8f6c48.js" crossorigin="anonymous"></script>
    <link rel = "icon" href = 
"uniqlo_roman_180.png" 
        type = "image/x-icon">
    <title>UNIQLO</title>
    <link rel="stylesheet" href="/FashionStore/css/style.css" type="text/css">
</head>
<body>
  <?php
    include 'navbar.php';
    echo '
      <div id="container">';
        include 'slide.php';  
      '</div>';
    include 'footer.php';
    // require 'abc.php';
  ?>


  <script src="/FashionStore/js/slide.js"></script>
</body>
</html>