<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="flex-center position-ref full-height">
<?php

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

    {!! Form::open(['action' => 'postsController@store', 'method' => 'POST']) !!}

    <div class='form-group'>
        {{ Form::label('title','Title') }}
        {{ Form::text('title','',['class'=>'form-control','placeholder'=>'Title']) }}
    </div>

    <div class='form-group'>
        {{ Form::label('body','Body') }}
        {{ Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body Text']) }}
    </div>

    {{ Form::submit('Submit',['class'=>'btn btn-primary']) }}

    {!! Form::close() !!}

    <form method='POST' enctype='multipart/form-data'>
        {!! csrf_field() !!}
        Upload CSV FILE: <input type='file' name='csv_info' /> <input type='submit' name='submit' value='Upload File' />
    </form>
<?php //include("upload.php");
include("CsvFile.php");
$csvFile = new CsvFile();

    include_once 'connection.php';
    if(isset($_POST['submit'])){
        if($_FILES['csv_data']['name']){

            $arrFileName = explode('.',$_FILES['csv_data']['name']);
            if($arrFileName[1] == 'csv'){
                $handle = fopen($_FILES['csv_data']['tmp_name'], "r");
                while (($dataC = fgetcsv($handle, 1000, ",")) !== FALSE) {

                    $EmployeeId = mysqli_real_escape_string($conn,$dataC[0]);
                    $FirstName = mysqli_real_escape_string($conn,$dataC[1]);
                    $LastName = mysqli_real_escape_string($conn,$dataC[2]);
                    $Title = mysqli_real_escape_string($conn,$dataC[3]);
                    $ManagerId = mysqli_real_escape_string($conn,$dataC[4]);

                    $import="INSERT into tbl_csv (EmployeeId,FirstName,LastName,Title,ManagerId) values('$EmployeeId','$FirstName','$LastName','$Title','$ManagerId')";
                    mysqli_query($conn,$import);
                }
                fclose($handle);
                print "Import done";
            }
        }
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

    <br><br><br><br>
    <br><br><br>
</div>
</div>
</div>
</body>
</html>
