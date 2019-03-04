<?php
/**
 * Created by PhpStorm.
 * User: cory-sfg
 * Date: 3/4/2019
 * Time: 12:14 AM
 */

$mid = 0;

function cvsMain($data)
{
    foreach ($data as $datas){
        echo '<tr>';
        foreach($datas as $dat) {
            echo "<td>", $dat,  '</td>';
        }
        echo  "<td><form method='get' action= '/emp/'$_SERVER[PHP_SELF]>
                   <input hidden type='text' name='managerId' value='$datas[4]'>
                    <input type='submit' value='See org-chart'>
                </form></td>";

        echo '</tr>';
    }}
