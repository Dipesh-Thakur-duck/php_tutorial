<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Filter Examples 2</title>
</head>
<body>
  <?php
    $names = ['Hello','Krish','Dipesh','Sima'];

    function filter($names,$fn){
      $filteredNames = [];
      foreach($names as $name){
        if($fn($name)){
          $filteredNames[] = $name;
        }
      }
      return $filteredNames;
    }

    $filteredNames = filter($names,function($name){
      return strlen($name) > 5;
    });

  ?>
  <h1>My name has more than 5 letters:</h1>
  <?php foreach($filteredNames as $name): ?>
    <p><?= $name ?></p>
  <?php endforeach; ?>
</body>
</html>