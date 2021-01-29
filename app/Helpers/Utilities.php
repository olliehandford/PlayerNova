<?php
namespace App\Helpers;

class Utilities
{
    public static function searchForId($id, $array)
    {
        foreach ($array as $key => $val) {
            if ($val[0] === $id) {
                return $key;
            }
        }
        return null;
    }
    public function in_array_r($needle, $haystack, $strict = false)
    {
        foreach ($haystack as $item) {
            if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && $this->in_array_r($needle, $item, $strict))) {
                return true;
            }
        }

        return false;
    }

    public static function decodeDBArray($string)
    {
        $return = [];
        if (!empty($string)) {
            $string = str_replace('"', '', $string);
            $json = str_replace('`', '"', $string);
            $return = json_decode($json);
            if (is_null($return)) {
                dump($string);
            }
        }
        return $return;
    }
    public static function encodeDBArray($array, $ints = false)
    {
        $array = collect($array)->map(function ($bool, $license) {
            return [$license, $bool];
        })->toArray();
        sort($array);
        $return = null;
        if (is_array($array)) :
            $string = json_encode($array);
        dd($string);
        $string = str_replace('{', '[', $string);
        $string = str_replace('"', '`', $string);
        $string = str_replace(':', ',', $string);
        $string = str_replace('}', ']', $string);
        if ($ints == false) {
            $string = preg_replace("/`(\d+)`/", "$1", $string);
        }
        $return = '"' . $string . '"';
        endif;
        return $return;
    }

    public static function encode($array)
    {
        $json = json_encode($array);
        $count = 0;
        while ($count <= count($array)) {
            $json = str_replace('"' . $count . '":', "", $json);
            $count++;
        }
        $string = $json;
        $return = null;
        if (is_array($array)) :
            $string = str_replace('{', '[', $string);
        $string = str_replace('"', '`', $string);
        $string = str_replace('}', ']', $string);
        $return = $string;
        endif;
        return $return;
    }
}
