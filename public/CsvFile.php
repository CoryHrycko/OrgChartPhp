<?php
/**
 * Created by PhpStorm.
 * User: cory-sfg
 * Date: 3/6/2019
 * Time: 12:04 AM
 */

class CsvFile extends mysqli
{

    public function  __construct()
    {
        parent::__construct('localhost',"root","","csv");
        if ($this->connect_error){
            echo "Failed to connect to database : ". $this->connect_error;
        }
    }
    public function import($file)
    {
        $csvFile = fopen($file,'r' );
        while ($ros = fgetcsv($csvFile) ){
            var_dump($ros);
        }
    }

}
