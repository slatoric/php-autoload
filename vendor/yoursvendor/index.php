<?php
//this index.php is in vendor directory
namespace lib;//namespace for all library

require_once("ald.php");//adds vendor directory to include_path and registers standart autoloader

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
\SomeGlobalCls::foo();//not recommended due to different definition files in root

require_once $_SERVER["DOCUMENT_ROOT"].'/fst_rtr.php';//integration with nikic/fast-route (optional)