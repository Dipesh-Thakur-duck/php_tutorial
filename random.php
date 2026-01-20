<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

    $details = [
      [
        'name'=>'Dipesh Thakur',
        'address'=>'Kapan, Kharibot',
        'age'=>21
      ],
      [
        'name'=>'Harish Bhatta',
        'address'=>'Kritipur',
        'age'=>21
      ]
    ];
  ?>
  <?php foreach($details as $detail): ?>
    <h1><?= $detail['name'] ?>:</h1>
    <p><?= $detail['address'] ?></p>
    <p><?= $detail['age'] ?></p>
  <?php endforeach; ?>
</body>
</html>