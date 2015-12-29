<?php
namespace vendor\yoursvendor\lib;//namespace from root directory of site

require_once($_SERVER["DOCUMENT_ROOT"]."/ald.php");//adds root directory to include_path and registers standart autoloader

cls\SomeCls::foo();
class SomeCls1 implements ifc\SomeIfc
{
    use trt\SomeTrt;
    public static function foo()
    {
        echo "nms: ".__NAMESPACE__."<br>"."cnm: ".__CLASS__."<br>"."mtd: ".__METHOD__."<br><br>";
    }
}
SomeCls1::foo();
SomeCls1::boo();
cls\SomeCls4SomeIfc::foo();
cls\SomeCls4SomeIfc::boo();
cls\SomeCls4SomeIfc::koo();

require_once $_SERVER["DOCUMENT_ROOT"].'/fst_rtr.php';//integration with nikic/fast-route (optional)