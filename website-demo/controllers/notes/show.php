<?php

use Core\App;

$db = App::resolve(\Core\Database::class);
$currentUserId = 1;



$note = $db->query('select * from notes where id = :id', ['id'=> $_GET['id']])->findorFail();

$db->authorize((int)$note['user_id'] === $currentUserId);


view("/notes/show.view.php",[
  'heading'=>'Note',
  'note'=> $note,
]);


