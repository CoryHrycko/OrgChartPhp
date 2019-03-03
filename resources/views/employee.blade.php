<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"></head>

</head>
<body>

<?php
include("init.inc.php");
$data = read_csv('CodeKataPhpOrgChart.csv');

$clickedNumber = 2;
?>
<div class="container">
<table class="table">
    <tbody>
    {{----}}
    <?php
    echo "<tr>";
    foreach($data[0] as $dat) {

        echo "<td>", $dat, "</td>";
    }
    echo "</tr>";
    //        ----------------------------------------
    ?>


<!--    --><?php
//    echo $data[$_REQUEST[]];
//    ?>

<p>ahhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</p>
    </tbody>
</table>
</div>
<br>
<a href={{view("/org")}}> Back </a>

</body>
</html>
