<?php
class Caching
{
    public function cacheTable($table,$fieldList)
    {
        foreach($fieldList as $field)
        {
            echo "Caching trường $field của bảng $table vào file <br>";
        }
    }
}