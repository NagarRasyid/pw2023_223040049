<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2c</title>
    <style>
        .kotak {
            border: 1px solid black;
            background-color: brown;
            color: cornsilk;
            text-align: center;
            flex-flow: column-reverse;
        }
    </style>
</head>

<body>
    <table cellpadding="0px" cellspacing="0px">
        <?php
        $n = '1';
        echo "<tr>";
        for ($i = 10; $i >= $n; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                echo "<td class=kotak height=30px width=30px >$j</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>