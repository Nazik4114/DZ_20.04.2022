<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    td {
        border: 1px black solid;
    }
</style>

<body>
    <table cellpadding="3px" cellspacing="0px">
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo ("<tr>");
            for ($j = 1; $j <= 5; $j++) {

                echo ("<td>");
                echo ("$i * $j = " . $j * $i);

                echo ("</td>");
            }
            echo ("</tr>");
        }




        ?>
    </table>
</body>

</html>