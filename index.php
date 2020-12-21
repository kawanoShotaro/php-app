<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php 
   $pdo = new PDO('mysql:host=s-cdbr-east-02.cleardb.com;dbname=heroku_69d7ae0707fa573;',
   'b28e163aad61de','f6c8df4'
    );
    foreach($pdo->query('select * from article') as $row){
        echo '<p>';
        echo $row['id'];
        echo '</p>';
    }
    ?>
</body>
</html>
