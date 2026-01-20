<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Function Basics</title>
</head>
<body>
  <?php
    $booksDetails=[
      [
        'name'=>'Women',
        'author'=>'Charles Bukowski'
      ],
      [
        'name'=>'Selfish Gene',
        'author'=>'Richard Dawkins'
      ],
      [
        'name'=>'Value of Others',
        'author'=>'Orion Taraban'
      ]
      ];

    function bookInfo($bookDetails,$authorName){
      $filteredBooks = [];
      foreach ($bookDetails as $bookInfo){
        if($bookInfo['author']=== $authorName){
          $filteredBooks[]=$bookInfo;
        }
      }
      return $filteredBooks;
    }

  ?>
  <ul>
    <?php foreach(bookInfo($booksDetails,'Orion Taraban') as $book): ?>
      <li>
        <?=$book['name']?>    
      </li>
    <?php endforeach;?>
  </ul>
</body>
</html>