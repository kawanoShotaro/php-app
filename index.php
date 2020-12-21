<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<<<<<<< HEAD
    <?php
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);

    $pdo = new PDO(
    'mysql:host=' . $server . ';dbname=' . $db . ';charset=utf8mb4',
     $username,
     $password,
    [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
    ]);
     ?>
    <?php 
    foreach($pdo->query('select * from article') as $row){
        echo $row['id'];
=======
   <?php 
   $pdo = new PDO('mysql:host=s-cdbr-east-02.cleardb.com;dbname=heroku_69d7ae0707fa573;',
   'b28e163aad61de','f6c8df4'
    );
    foreach($pdo->query('select * from article') as $row){
        echo '<p>';
        echo $row['id'];
        echo '</p>';
>>>>>>> a82501825cfe9a01bdc7f5a6cb20519b8ac89230
    }
    ?>
</body>
</html>
