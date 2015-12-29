<?php
namespace vendor\yoursvendor\lib\cls;
class SomeCls4SomeIfc implements \vendor\yoursvendor\lib\ifc\SomeIfc
{
    use \vendor\yoursvendor\lib\trt\SomeTrt;
    public static function foo()
    {
        echo "nms: ".__NAMESPACE__."<br>"."cnm: ".__CLASS__."<br>"."mtd: ".__METHOD__."<br><br>";
    }
    public static function koo()
    {
        echo "nms: ".__NAMESPACE__."<br>"."cnm: ".__CLASS__."<br>"."mtd: ".__METHOD__."<br><br>";
    }
}