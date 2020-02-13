<?php
// index.php
$connection = new PDO("mysql:host=localhost;dbname=dc_dev_blog_2", 'root', '');

$result = $connection->query('SELECT id, title FROM posts');

$connection = null;

// include the HTML presentation code
require 'templates/list.php';

?>

