<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main PHP page</title>
</head>

<body>
    <h1>PHP Censorship Exercise</h1>
    <form action="censored.php" method=POST>

        <input type="text" name="censored" placeholder="Enter a word to censor" required>

        <br><br>

        <textarea name="paragraph" cols="30" rows="10" required>
        </textarea>

        <br><br>

        <input type="submit" value="S U B M I T">
    </form>

</body>

</html>