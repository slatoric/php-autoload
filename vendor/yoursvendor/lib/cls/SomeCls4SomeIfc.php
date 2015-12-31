<?php
namespace lib\cls;
class SomeCls4SomeIfc implements \lib\ifc\SomeIfc
{
    use \lib\trt\SomeTrt;
    public static function foo()
    {
        echo "nms: ".__NAMESPACE__."<br>"."cnm: ".__CLASS__."<br>"."mtd: ".__METHOD__."<br><br>";
    }
    public static function koo()
    {
        echo "nms: ".__NAMESPACE__."<br>"."cnm: ".__CLASS__."<br>"."mtd: ".__METHOD__."<br><br>";
    }
}