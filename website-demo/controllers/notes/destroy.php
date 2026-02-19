<?php

use Core\App;

$db = App::resolve(\Core\Database::class);

$currentUserId = 1;


$note = $db->query('select * from notes where id = :id', ['id'=> $_POST['id']])->findorFail();

$db->authorize((int)$note['user_id'] === $currentUserId);

$db->query('DELETE FROM notes WHERE id = :id', ['id'=> $_POST['id']]);

header('location: /notes');

exit;
