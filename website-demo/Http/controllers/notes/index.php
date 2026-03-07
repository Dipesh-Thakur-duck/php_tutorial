<?php

use Core\App;

$db = App::resolve(\Core\Database::class);

$notes = $db->query('select * from notes where user_id = 1')->fetchAll();

view("/notes/index.view.php",[
  'heading'=>'My Notes',
  'notes'=> $notes,
]);