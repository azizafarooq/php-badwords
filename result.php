<?php 
$paragraph = $_GET['paragrafo'];
$censored_word = $_GET['parola-da-censurare'];

$paragraph_length = strlen($paragraph);

$new_paragraph = str_replace($censored_word, '***', $paragraph);

$new_paragraph_length = strlen($new_paragraph);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Link css-->
    <link rel="stylesheet" href="./style/main.css" />
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Censor A Word</title>
</head>
<body>
    <div class="container mt-5">
        <h3>Original Paragraph </h3>
        <h5><?php echo $paragraph?></h5>
        <span>Paragraph Length: <?php echo $paragraph_length ?></span>
        <h3>Unwanted Word</h3>
        <h5><?php echo $censored_word ?></h5>
        <h3>Censored Paragraph</h3>
        <h5><?php echo $new_paragraph ?></h5>
        <span>Paragraph Length: <?php echo $new_paragraph_length ?></span>
    </div>
</body>
</html>