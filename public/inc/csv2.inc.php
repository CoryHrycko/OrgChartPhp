<?php
function read_csv2($filename)
{
    $rows2=array();
//    $rows2 = file($filename, FILE_IGNORE_NEW_LINES);
    foreach ((file($filename, FILE_IGNORE_NEW_LINES)) as $line) {
        $rows2[] = str_getcsv($line);
    };
    return $rows2;
};

$datas[] = 0;
$data2 = read_csv2('codekataphporgchart.csv');
echo "<tr>";
foreach($data2[$_GET['managerId']] as $dat) {
//
    echo "<td>", $dat, "</td>";
    array_push($datas,$dat );
}

echo  "<td><form method='get' action= '/emp/'$_SERVER[PHP_SELF]>
                   <input hidden type='text' name='managerId' value='$datas[5]'>
                    <input type='submit' value='See org-chart'>
                </form></td>";
echo "</tr>";
//            ----------------------------------------
/**
 * Created by PhpStorm.
 * User: cory-sfg
 * Date: 3/3/2019
 * Time: 10:35 PM
 */
?>
