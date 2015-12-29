shows how to use namespaces with ini setting("include_path");
every file that tries to load all library must have one line: require_once($_SERVER["DOCUMENT_ROOT"]."/ald.php");
be careful because of use $_SERVER["DOCUMENT_ROOT"] variable;
this allows to include all classes, interfaces and traits from any directory of site;
example in vendor\yoursvendor\ uses fully qualified names for namespaces

some integration example with FastRoute (better use Composer for auto updates):
https://github.com/nikic/FastRoute
https://packagist.org/packages/nikic/fast-route
for use the router we need to redirect all Not Found requests to index.php in nginx config we can use try_files $uri $uri/ /index.php?$args;

example in vendor\othervendor\ shows how to use another strategy of autoloading - using dirname(__FILE__) in include_path, that adds current root dir for relative namespaces - it helps to use shorter names