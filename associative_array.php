<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    $books=[
      [
        'name'=>'Women',
        'author'=>'Charles Bukowski'
      ],
      [
        'name'=>'Value of Others',
        'author'=>'Orion Taraban'
      ]
    ]
  ?>

  <ul>
    <?php foreach($books as $book) :?>
      <li><?=$book['name']?></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>