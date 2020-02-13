<?php
// index.php
$connection = new PDO("mysql:host=localhost;dbname=dc_dev_blog_2", 'root', '');

$result = $connection->query('SELECT id, title FROM posts');

?>

<!DOCTYPE html>
<html>
    <head>
        <title>List of Posts</title>
    </head>
    <body>
        <h1>List of Posts</h1>
        <ul>
            <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <li>
                <a href="/show.php?id=<?php echo $row['id'] ?>">
                    <?= $row['title'] ?>
                </a>
            </li>
            <?php endwhile ?>
        </ul>
    </body>
</html>

<?php
$connection = null;
?>