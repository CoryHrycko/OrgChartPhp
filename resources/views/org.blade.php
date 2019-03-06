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
 * User: cory
 * Date: 3/1/2019
 * Time: 11:30 AM
 */
include("init.inc.php"); ?>
<br><br><br><br>
<div class="container">
    <table class="table">
        <tbody>
       <?php include("inc/chart.inc.php");
           cvsMain($data); ?>
        </tbody>
    </table>
    <br><br><br><br>
    <br><br><br>
<hr>

<div class="row justify-content-center align-items-center">
<?php //include("upload.php");
include("CsvFile.php");
$csvFile = new CsvFile();

if(isset($_POST['sub'])){
    $csvFile->import($_FILES['file']['tmp_name']);
}
?>
    {{--<form action="upload.php" method="get" enctype="multipart/form-data">--}}
       {{--Still Ironing out this section. ----}}
        {{--<br><br><br>--}}
        {{--Select CSV file to parse( Format has to be - EmployeeId,	FirstName,	LastName,	Title,	ManagerId,)--}}
        {{--:--}}
        {{--<input type="file" name='fileToUpload' id="fileToUpload">--}}
        {{--<input type="submit" value="Upload Csv" name="submit">--}}
    {{--</form>--}}
    <form  method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file"><br><br>
        <input type="submit" value="Import" name="sub">
    </form>
    <br><br><br><br>
    <br><br><br>
</div>
</div>
</div>
</body>
</html>
