<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anonymous Function</title>
</head>
<body>
  <?php
    $books=[
      [
        'name'=>'Factotum',
        'author'=>'Charles Bukwoski'
      ],
      [
        'name'=>'Evolution of Desire',
        'author'=>'David M. Buss'
      ]
    ];
    $filteredData = function ($data,$variable,$search){
      $result=[];
      foreach($data as $item){
        if($item[$variable]===$search){
          $result[]=$item;
        }
      }
      return $result;
    }
  ?>
  <ul>
    <?php foreach($filteredData($books,'name','Evolution of Desire') as $book): ?>
      <li><?=$book['name']?></li>
    <?php endforeach; ?> 
  </ul>
</body>
</html>