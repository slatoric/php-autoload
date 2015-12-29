<?php
namespace vendor\yoursvendor\lib\cls;
class SomeCls
{
    public static function foo()
    {
        echo "nms: ".__NAMESPACE__."<br>"."cnm: ".__CLASS__."<br>"."mtd: ".__METHOD__."<br><br>";
    }
}