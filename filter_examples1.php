<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Filter Examples 1</title>
</head>
<body>
  <?php
    $numbers = [1,2,3,4,5];

    function filter($numbers,$fn){
      $result=[];
      foreach($numbers as $number){
        if($fn($number)){
          $result[] = $number;
        }
      }
      return $result;
    }

    $filteredNumbers = filter($numbers,function($number){
      return $number % 2 === 0;
    });
  ?>
  <p>Result:</p>
  <?php foreach($filteredNumbers as $number): ?>
    <p><?= $number ?></p>
  <?php endforeach; ?>
</body>
</html>