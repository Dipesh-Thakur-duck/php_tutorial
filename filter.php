<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    $details=[
      [
        'name'=>'Dipesh Thakur',
        'age'=>21,
        'gender'=>'Male'
      ],
      [
        'name'=>'Kiran Regmi',
        'age'=>34,
        'gender'=>'Female'
      ],
      [
        'name'=>'Bikram Singh',
        'age'=>36,
        'gender'=>'Male'
      ]
    ];
    function filter($details, $fn){
      $filteredDetails = [];

      foreach ($details as $detail) {
        if ($fn($detail)){
          $filteredDetails[] = $detail;
        }
      }
      return $filteredDetails;
    }

    $filteredDetails = array_filter($details, function($detail){
      return $detail['gender'] === 'Male';
    });
  ?>
  <?php foreach($filteredDetails as $detail): ?>
    <p><?= $detail['name'] ?></p>
  <?php endforeach; ?>
</body>
</html>