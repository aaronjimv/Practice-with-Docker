<?php 

echo '<h1>Hello Word!</h1>';

$connection = new PDO('mysql:host=db;dbname=xampp', 'root', 'pass');

$res = $connection->exec('SELECT "Hello word"');
echo $res; // if print 0 the connection to db is ok.

?>