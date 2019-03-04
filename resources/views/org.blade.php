<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="flex-center position-ref full-height">
<?php
/**
 * Created by PhpStorm.
 * User: cory-sfg
 * Date: 3/1/2019
 * Time: 11:30 AM
 */
$mid = 0;
include("init.inc.php");
?>
<br><br><br><br>
<div class="container">
    <table class="table">
        <tbody>
       <?php
        foreach ($data as $datas){
            echo '<tr>';
        foreach($datas as $dat) {
    echo "<td>", $dat,  '</td>';
}
        $datasLink = $datas[4];

         echo  "<td><form method='get' action= '/emp/'$_SERVER[PHP_SELF]>
                   <input hidden type='text' name='managerId' value='$datas[4]'>
                    <input type='submit' value='See org-chart'>
                </form></td>";

      echo '</tr>';
        }?>
        </tbody>
    </table>
    <br><br><br><br>
    <br><br><br>
<hr>

<div class="row justify-content-center align-items-center">
<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <input  type="text" name="managerId" value="<?php $datas[4] ?>">
    <input type="submit">
</form>
</div>
</div>
</div>
</body>
</html>
