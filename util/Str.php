<?php


namespace FedEx\Utility;


class Str
{
    static public function camelize($input, $separator ="_"): string
    {
        return lcfirst(str_replace($separator,'',ucwords($input,$separator)));
    }

    static public function unCamelCase($str): string
    {
        $str = preg_replace('/([a-z])([A-Z])/', "\\1_\\2", $str);
        $str = strtolower($str);
        return $str;
    }
}
