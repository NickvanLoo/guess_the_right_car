<html>

<head>
</head>

<body>
  <h1> Welke auto is dit? </h1>

  <?php
  $dir = 'img/auto';
  $images = scandir($dir);
  $images = \array_diff($images, [".", ".."]);

  shuffle($images);
  $selectedImage = $images[2];
  ?>

  <img src="<?php echo $dir . '/' . $selectedImage ?>" height="50%" width="50%">

  <form action="result.php" method="post">
    <input type="hidden" name="selectedImage" value="<?php echo $selectedImage ?>">
    <?php
    shuffle($images);
    foreach ($images as $image) {
      echo "<input type=submit name=chosenImage value=$image>";
    }
    ?>
  </form>

</body>

</html>