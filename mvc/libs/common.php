<?php
class Common
{
    public static function getValue($data, $field, $default = null)
    {
        return isset($data[$field]) ? $data[$field] : $default;
    }
}