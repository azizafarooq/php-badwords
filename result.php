<?php 
$paragraph = $_GET['paragrafo'];
$censored_word = $_GET['parola-da-censurare'];

$paragraph_length = strlen($paragraph);
$censored_word = '***';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <h3>Paragrafo: </h3>
        <h4><?php echo $paragraph?></h4>
        <h3>Lunghezza:</h2>
        <h4><?php echo $paragraph_length ?></h4>
    </div>
</body>
</html>