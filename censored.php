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

    if (isset($_GET['censored']) && isset($_GET['paragraph'])) {

        $censored = $_GET['censored'];
        $paragraph = $_GET['paragraph'];

        if (!empty($censored) && !empty($paragraph)) {

            $censoredParagraph = str_replace($censored, '***', $paragraph);
            $censoredWordCalc = substr_count($paragraph, $censored);
            $censoredWordLength = strlen($censored) * $censoredWordCalc;
            $updatedLength = strlen($paragraph) - $censoredWordLength;

            echo "Original paragraph: <br><br> ";
            echo $paragraph . "<br><br>";
            echo 'Length: ' . strlen($paragraph) . "<br><br>";

            echo "Censored paragraph: <br><br> ";
            echo $censoredParagraph . "<br><br>";
            echo 'Updated Length: ' . $updatedLength;
        } else {

            echo 'Enter both a word and a paragraph';
        }
    } else {

        echo 'Enter both a word and a paragraph';
    }

    ?>

</body>

</html>