<html>

<head>
</head>

<body>

  <?php
  $selectedImage = $_POST['selectedImage'];
  $chosenImage = $_POST['chosenImage'];

  if ($selectedImage == $chosenImage) {
    echo "<img src='img/congratulations.jpg'>";
  } else {
    echo "<img src='img/lose.jpg'>";
  }
  ?>
  <form action="opdracht4.php">
    <input type="submit" value="Back">
  </form>
</body>

</html>