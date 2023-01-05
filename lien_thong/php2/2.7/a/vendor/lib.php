<?php
if (!function_exists('dd')) {
    function dd($data)
    {

        if (is_array($data)) {
            echo "<pre>";
            print_r($data);
            echo "</pre>";
            die();
        } else if (is_object($data)) {
            echo "<pre>";
            print_r($data);
            echo "</pre>";
            die();
        } else if (is_numeric($data)) {
            echo "<pre>";
            echo "Number";
            echo "<br>";
            print_r($data);
            echo "</pre>";
            die();
        } else if (is_string($data)) {
            echo "<pre>";
            echo "String";
            echo "<br>";
            print_r($data);
            echo "</pre>";
            die();
        }
        echo $data;
        die();
    }
}
