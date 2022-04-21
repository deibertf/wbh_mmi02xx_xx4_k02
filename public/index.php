<?php

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['convert']))
{
    func();
}
function func()
{
   echo 'YHEAG!';
}

echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latin to VOTOX</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="latin">Latin/German:</label>
        <textarea id="latin">
        </textarea>
         <label for="votox">Votox:</label>
        <textarea id="votox">
        </textarea>
        <button type="submit" name="convert">Convert</button>
    </form>
</body>
</html>';