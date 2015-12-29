<?php
namespace vendor\yoursvendor\lib\trt;
trait SomeTrt
{
    public static function boo()
    {
        echo "nms: ".__NAMESPACE__."<br>"."cnm: ".__CLASS__."<br>"."mtd: ".__METHOD__."<br><br>";
    }
}