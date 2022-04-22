<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .clear {
            clear: both;
        }

        .col {
            float: left;
            border: 1px black solid;
            width: 30px;
            height: 30px;
        }
    </style>
</head>

<body>
    <?php for ($i = 1; $i <= 10; $i++) : ?>
        <?php if ($i % 2 != 0) : ?>
            <?php for ($j = 1; $j <= 10; $j++) : ?>
                <?php if ($j % 2 == 0) : ?>
                    <div class="col" style="background-color: white;"></div>
                <?php endif ?>
                <?php if ($j % 2 != 0) : ?>
                    <div class="col" style="background-color: black;"></div>
                <?php endif ?>
            <?php endfor ?>

        <?php endif ?>
        <?php if ($i % 2 == 0) : ?>
            <?php for ($j = 1; $j <= 10; $j++) : ?>
                <?php if ($j % 2 != 0) : ?>
                    <div class="col" style="background-color: white;"></div>
                <?php endif ?>
                <?php if ($j % 2 == 0) : ?>
                    <div class="col" style="background-color: black;"></div>
                <?php endif ?>
            <?php endfor ?>

        <?php endif ?>
        <div class="clear"></div>
    <?php endfor ?>
</body>

</html>