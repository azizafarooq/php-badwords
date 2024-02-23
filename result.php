<?php 
$paragraph = $_GET['paragrafo'];
$censored_word = $_GET['parola-da-censurare'];

$paragraph_length = strlen($paragraph);

$new_paragraph = str_replace($censored_word, '***', $paragraph);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>

    <style>
        body{
            font-family: "Montserrat", sans-serif;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h3>Paragrafo: </h3>
        <h4><?php echo $paragraph?></h4>
        <h3>Lunghezza:</h2>
        <h4><?php echo $paragraph_length ?></h4>
        <h3>Paragrafo censurato</h3>
        <h4><?php echo $new_paragraph ?></h4>
    </div>
</body>
</html>