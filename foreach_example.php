<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>foreach example</title>
</head>
<body>
  <?php
    $books=['Women', 'Factotum', 'Ham on Rye'];

    foreach($books as $book){
      echo "<li>$book</li>";
    }
  ?>
  <?php foreach($books as $book): ?>
    <li><?=$book?></li>
  <?php endforeach; ?>

  <?php foreach($books as $book) { ?>
    <li><?= $book ?></li>
  <?php } ?>

</body>
</html>