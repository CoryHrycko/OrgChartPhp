<?php
/**
 * Created by PhpStorm.
 * User: cory-sfg
 * Date: 3/1/2019
 * Time: 11:28 AM
 */

//reads csv file
function read_csv($filename)
{
    $rows2=array();
//    $rows2 = file($filename, FILE_IGNORE_NEW_LINES);
    foreach ((file($filename, FILE_IGNORE_NEW_LINES)) as $line) {
        $rows2[] = str_getcsv($line);
    };
    return $rows2;
};
//writes given array to csv file
function write_csv($filename, $rows2)
{
    $file = fopen($filename, 'w');

    foreach ($rows2 as $row)
    {
    fputcsv($file,$row);
}
    fclose($file);
}
