# php-autoload
php autoloading with standart autoloader

https://github.com/slatoric/php-autoload.git

shows how to use namespaces with ini setting("include_path")
every file that tries to load all library must have one line: require_once([$_SERVER["DOCUMENT_ROOT"].]"[/]ald.php"); in which path to vendor (/vendor/yoursvendor/) added to include_path
be careful because of use $_SERVER["DOCUMENT_ROOT"] variable; however in most cases it exists
this allows to include all classes, interfaces and traits from any directory of site
all namespaces starts from vendor dir

some integration example with FastRoute (better use Composer for auto updates):
https://github.com/nikic/FastRoute
https://packagist.org/packages/nikic/fast-route
for use the router we need to redirect all Not Found requests to index.php in nginx config we can use try_files $uri $uri/ /index.php?$args;