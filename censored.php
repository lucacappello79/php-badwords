<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Censorship Exercise Results</title>
</head>


<body>

    <h1>PHP Censorship Exercise Results</h1>

    <?php
    
    $censored = $_POST['censored'];
    $paragraph = $_POST['paragraph'];
    $censoredParagraph = str_replace($censored, '***', $paragraph);

    echo "Original paragraph: <br><br> ";
    echo $paragraph . "<br><br>";
    echo 'Length: ' . strlen($paragraph) . "<br><br>";

    echo "Censored paragraph: <br><br> ";
    echo $censoredParagraph . "<br><br>";
    echo 'Length: ' . strlen($censoredParagraph);

    ?>

</body>
</html>