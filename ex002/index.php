<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>PHP example</h1>
    <?php 
        date_default_timezone_set("america/Sao_Paulo"); // GMT -3
        $weekDay = date("D");
        $calendarDay = date("d/M/Y");
        $time = date("G:i:s T");

        echo "Today is $weekDay, $calendarDay. And it's $time";
    ?>
</body>
</html>