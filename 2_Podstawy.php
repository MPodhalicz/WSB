<<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h4>Lista</h4>
    <ul>
        <li>Poznań</li>
        <li>Gniezno</li>
        <li>Września</li>
    </ul>
    <?php
        $city = "Jarocin";
        echo <<< LIST
        <ul>
            <li>Poznań</li>
            <li>Gniezno</li>
            <li>Września</li>
        </ul>
LIST;

    ?>
    <h4>Zawartość skryptu</h4>
    <?php
        include "./scripts/skrypt.php";
        include_once "./scripts/skrypt.php";

        require "./scripts/skrypt.php";
    ?>
    <h4>Zawartość po wykonaniu skryptu</h4>

</body>
</html>
